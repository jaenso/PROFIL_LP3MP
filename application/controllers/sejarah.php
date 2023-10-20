<?php

class sejarah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('sejarah_model', 'sejarah');
        $this->load->library('form_validation');
    }

    public function index()
    {
        is_logged_out();
        $data['tittle'] = 'Sejarah';
        $data['user'] = get_user();
        $data['informasi'] = $this->sejarah->getsejarah();
        if ($this->input->post('keyword')) {
            $data['informasi'] = $this->sejarah->cariSejarah();
        }
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar', $data);
        $this->load->view('admin/sejarah/index', $data);
        $this->load->view('template_admin/footer');
    }
}
