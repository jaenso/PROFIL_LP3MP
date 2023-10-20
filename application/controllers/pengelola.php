<?php

class pengelola extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pengelola_model', 'pengelola');
        $this->load->library('form_validation');
        is_logged_out();
    }

    public function index()
    {
        $data['tittle'] = 'Pengelola';
        $data['user'] = get_user();
        $data['informasi'] = $this->pengelola->getPengelola();
        if ($this->input->post('keyword')) {
            $data['informasi'] = $this->pengelola->cariPengelola();
        }
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar', $data);
        $this->load->view('admin/pengelola/index', $data);
        $this->load->view('template_admin/footer');
    }
}
