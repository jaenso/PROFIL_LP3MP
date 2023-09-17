<?php

class sejarah extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('sejarah_model', 'sejarah');
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data['tittle'] = 'Sejarah';

        //CONFIG
        $config['total_rows'] = $this->sejarah->countAllsejarah();
        $config['per_page'] = 2;


        //INITIALIZE
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
		$data['informasi'] = $this->sejarah->getsejarahPage($config['per_page'] ,$data['start']);
        if($this->input->post('keyword')){
            $data['informasi'] = $this->sejarah->cariSejarah();
        }
		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar', $data);
		$this->load->view('admin/sejarah/index', $data);
		$this->load->view('template_admin/footer');
	}

    public function tambah()
    {
		$data['tittle'] = 'Tambah Sejarah';
		$this->form_validation->set_rules('judul','Judul','required');
        $this->form_validation->set_rules('isi','Isi','required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('template_admin/header', $data);
			$this->load->view('template_admin/sidebar', $data);
			$this->load->view('admin/sejarah/tambah');
			$this->load->view('template_admin/footer');
        }
        else
        {
            $this->sejarah->tambahSejarah();
			$this->session->set_flashdata('flash','ditambahkan');
            redirect('sejarah');
        }
    }

    public function edit($idf)
    {
        $data['tittle'] = 'Ubah Sejarah';
        $data['informasi'] = $this->sejarah->getSejarahById($idf);

        $this->form_validation->set_rules('judul','Judul','required');
        $this->form_validation->set_rules('isi','Isi','required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('template_admin/header', $data);
			$this->load->view('template_admin/sidebar', $data);
			$this->load->view('admin/sejarah/edit', $data);
			$this->load->view('template_admin/footer');
        }
        else
        {
            $this->sejarah->ubahsejarah();
            $this->session->set_flashdata('flash','diubah');
            redirect('sejarah');
        }
    }


	public function hapus($idf)
    {
        $this->sejarah->hapussejarah($idf);
        $this->session->set_flashdata('flash','dihapus');
        redirect('sejarah');
    }
}