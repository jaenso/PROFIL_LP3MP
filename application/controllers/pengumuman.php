<?php

class Pengumuman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pengumuman_model', 'pengumuman');
        $this->load->library('form_validation');
    }

    public function detail($idk)
    {
        $this->load->model('berita_model', 'berita');
        $data['title'] = 'Konten Pengumuman';
        $data['konten'] = $this->pengumuman->getKonten($idk);
        $data['konten_lain'] = $this->berita->getBerita();

        $this->load->view('temp_pengunjung/header', $data);
        $this->load->view('pengunjung/konten/isi_konten', $data);
        $this->load->view('temp_pengunjung/footer');
    }
}
