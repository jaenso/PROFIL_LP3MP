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
        $data['konten'] = $this->berita->getKonten($idk);
        $this->load->view('temp_pengunjung/header', $data);
        $this->load->view('pengunjung/isi_konten', $data);
        $this->load->view('temp_pengunjung/footer');
    }
}
