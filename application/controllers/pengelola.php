<?php

class pengelola extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('pengelola_model', 'pengelola');
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data['tittle'] = 'Pengelola';

        //CONFIG
        $config['total_rows'] = $this->pengelola->countAllPengelola();
        $config['per_page'] = 2;


        //INITIALIZE
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
		$data['informasi'] = $this->pengelola->getPengelolaPage($config['per_page'] ,$data['start']);
        if($this->input->post('keyword')){
            $data['informasi'] = $this->pengelola->cariPengelola();
        }
		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar', $data);
		$this->load->view('admin/pengelola/index', $data);
		$this->load->view('template_admin/footer');
	}

    public function edit($idf)
    {
        $data['tittle'] = 'Ubah Pengelola';
        $data['informasi'] = $this->pengelola->getPengelolaById($idf);

        $this->form_validation->set_rules('judul','Judul','required');
        $this->form_validation->set_rules('isi','Isi','required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('template_admin/header', $data);
			$this->load->view('template_admin/sidebar', $data);
			$this->load->view('admin/pengelola/edit', $data);
			$this->load->view('template_admin/footer');
        }
        else
        {
            $this->pengelola->ubahPengelola();
            $this->session->set_flashdata('flash','diubah');
            redirect('pengelola');
        }
    }


	public function hapus($idf)
    {
        $this->pengelola->hapusPengelola($idf);
        $this->session->set_flashdata('flash','dihapus');
        redirect('pengelola');
    }
}