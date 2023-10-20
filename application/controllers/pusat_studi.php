<?php

class pusat_studi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pusat_studi_model', 'pusat_studi');
        $this->load->library('form_validation');
    }

    public function index()
    {
        is_logged_out();
        $data['tittle'] = 'Pusat Studi';
        $data['user'] = get_user();
        $data['informasi'] = $this->pusat_studi->getPusat_Studi();
        if ($this->input->post('keyword')) {
            $data['informasi'] = $this->pusat_studi->cariPusat_Studi();
        }
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar', $data);
        $this->load->view('admin/pusat_studi/index', $data);
        $this->load->view('template_admin/footer');
    }
}
