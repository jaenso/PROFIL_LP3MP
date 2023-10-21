<?php

class informasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pengelola_model', 'pengelola');
        $this->load->model('visi_misi_model', 'visi_misi');
        $this->load->model('sejarah_model', 'sejarah');
        $this->load->model('pusat_studi_model', 'pusat_studi');
        $this->load->library('form_validation');
        is_logged_out();
    }

    public function edit_pgl($idf)
    {
        $data['user'] = get_user();
        $data['title'] = 'Ubah Pengelola';
        $data['informasi'] = $this->pengelola->getPengelolaById($idf);

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_admin/header', $data);
            $this->load->view('temp_admin/sidebar', $data);
            $this->load->view('admin/informasi/edit', $data);
            $this->load->view('temp_admin/footer');
        } else {
            $this->pengelola->ubahPengelola();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('admin/pengelola');
        }
    }

    public function edit_vm($idf)
    {
        $data['user'] = get_user();
        $data['title'] = 'Ubah Visi Misi dan Tujuan';
        $data['informasi'] = $this->visi_misi->getVisiMisiById($idf);

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_admin/header', $data);
            $this->load->view('temp_admin/sidebar', $data);
            $this->load->view('admin/informasi/edit', $data);
            $this->load->view('temp_admin/footer');
        } else {
            $this->visi_misi->ubahVisiMisi();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('admin/visi_misi');
        }
    }

    public function edit_sjr($idf)
    {
        $data['user'] = get_user();
        $data['title'] = 'Ubah Sejarah';
        $data['informasi'] = $this->sejarah->getSejarahById($idf);

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_admin/header', $data);
            $this->load->view('temp_admin/sidebar', $data);
            $this->load->view('admin/informasi/edit', $data);
            $this->load->view('temp_admin/footer');
        } else {
            $this->sejarah->ubahsejarah();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('admin/sejarah');
        }
    }

    public function edit_ps($idf)
    {
        $data['user'] = get_user();
        $data['title'] = 'Ubah Pusat Studi';
        $data['informasi'] = $this->pusat_studi->getPusat_StudiById($idf);

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_admin/header', $data);
            $this->load->view('temp_admin/sidebar', $data);
            $this->load->view('admin/informasi/edit', $data);
            $this->load->view('temp_admin/footer');
        } else {
            $this->pusat_studi->ubahPusat_Studi();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('admin/pusat_studi');
        }
    }
}
