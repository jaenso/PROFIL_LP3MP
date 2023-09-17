<?php

class pusat_studi extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('pusat_studi_model', 'pusat_studi');
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data['tittle'] = 'Pusat Studi';

        $config['total_rows'] = $this->pusat_studi->countAllPusat_Studi();
        $config['per_page'] = 2;
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
		$data['informasi'] = $this->pusat_studi->getPusat_StudiPage($config['per_page'] ,$data['start']);
        if($this->input->post('keyword')){
            $data['informasi'] = $this->pusat_studi->cariPusat_Studi();
        }
		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar', $data);
		$this->load->view('admin/pusat_studi/index', $data);
		$this->load->view('template_admin/footer');
	}

    public function edit($idf)
    {
        $data['tittle'] = 'Ubah Pusat Studi';
        $data['informasi'] = $this->pusat_studi->getPusat_StudiById($idf);

        $this->form_validation->set_rules('judul','Judul','required');
        $this->form_validation->set_rules('isi','Isi','required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('template_admin/header', $data);
			$this->load->view('template_admin/sidebar', $data);
			$this->load->view('admin/pusat_studi/edit', $data);
			$this->load->view('template_admin/footer');
        }
        else
        {
            $this->pusat_studi->ubahPusat_Studi();
            $this->session->set_flashdata('flash','diubah');
            redirect('pusat_studi');
        }
    }


	public function hapus($idf)
    {
        $this->pusat_studi->hapusPusat_Studi($idf);
        $this->session->set_flashdata('flash','dihapus');
        redirect('pusat_studi');
    }
}