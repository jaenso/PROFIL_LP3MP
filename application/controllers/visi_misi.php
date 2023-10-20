<?php

class visi_misi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('visi_misi_model', 'visi_misi');
        $this->load->library('form_validation');
    }

    public function index()
    {
        is_logged_out();
        $data['tittle'] = 'Visi dan Misi';
        $data['user'] = get_user();
       
        $data['informasi'] = $this->visi_misi->getVisiMisi();
        if ($this->input->post('keyword')) {
            $data['informasi'] = $this->visi_misi->cariVisiMisi();
        }
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar', $data);
        $this->load->view('admin/visi_misi/index', $data);
        $this->load->view('template_admin/footer');
    }
}
