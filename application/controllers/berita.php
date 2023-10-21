<?php

class berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('berita_model', 'berita');
        $this->load->library('form_validation');
    }

    public function detail($idk)
    {
        $data['title'] = 'Konten Berita';
        $data['konten_lain'] = $this->berita->getBerita();
        $data['konten'] = $this->berita->getKonten($idk);
        $this->load->view('temp_pengunjung/header', $data);
        $this->load->view('pengunjung/konten/isi_konten', $data);
        $this->load->view('temp_pengunjung/footer');
    }



    public function adminFilter()
    {
        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');

        $this->session->set_userdata('tgl_awal', $tgl_awal);
        $this->session->set_userdata('tgl_akhir', $tgl_akhir);

        redirect('admin');
    }

    public function pengunjungBerita()
    {
        $tgl_awal = $this->session->userdata('tgl_awal');
        $tgl_akhir = $this->session->userdata('tgl_akhir');

        // Ambil berita berdasarkan tanggal filter
        $data['berita'] = $this->berita->getBeritaByFilter($tgl_awal, $tgl_akhir);

        // Tampilkan halaman berita kepada pengunjung
        $this->load->view('pengunjung/berita_view', $data);
    }
}
