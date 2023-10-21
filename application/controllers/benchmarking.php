<?php

class benchmarking extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('berita_model', 'berita');
        $this->load->model('benchmarking_model', 'benchmarking');
        $this->load->library('form_validation');
    }

    public function detail($idk)
    {
        $data['title'] = 'Konten Benchmarking';
        $data['konten_lain'] = $this->berita->getBerita();
        $data['konten'] = $this->benchmarking->getKonten($idk);
        $this->load->view('temp_pengunjung/header', $data);
        $this->load->view('pengunjung/konten/isi_konten', $data);
        $this->load->view('temp_pengunjung/footer');
    }
}
