<?php

class visi_misi extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('visi_misi_model', 'visi_misi');
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data['tittle'] = 'Visi dan Misi';

        //CONFIG
        $config['total_rows'] = $this->visi_misi->countAllVisiMisi();
        $config['per_page'] = 2;


        //INITIALIZE
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
		$data['informasi'] = $this->visi_misi->getVisiMisiPage($config['per_page'] ,$data['start']);
        if($this->input->post('keyword')){
            $data['informasi'] = $this->visi_misi->cariVisiMisi();
        }
		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar', $data);
		$this->load->view('admin/visi_misi/index', $data);
		$this->load->view('template_admin/footer');
	}

    public function tambah()
    {
		$data['tittle'] = 'Tambah visi_misi';
		$this->form_validation->set_rules('judul','Judul','required');
        $this->form_validation->set_rules('isi','Isi','required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('template_admin/header', $data);
			$this->load->view('template_admin/sidebar', $data);
			$this->load->view('admin/visi_misi/tambah');
			$this->load->view('template_admin/footer');
        }
        else
        {
            $this->visi_misi->tambahVisiMisi();
			$this->session->set_flashdata('flash','ditambahkan');
            redirect('visi_misi');
        }
    }

    public function edit($idf)
    {
        $data['tittle'] = 'Ubah visi_misi';
        $data['informasi'] = $this->visi_misi->getVisiMisiById($idf);

        $this->form_validation->set_rules('judul','Judul','required');
        $this->form_validation->set_rules('isi','Isi','required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('template_admin/header', $data);
			$this->load->view('template_admin/sidebar', $data);
			$this->load->view('admin/visi_misi/edit', $data);
			$this->load->view('template_admin/footer');
        }
        else
        {
            $this->visi_misi->ubahVisiMisi();
            $this->session->set_flashdata('flash','diubah');
            redirect('visi_misi');
        }
    }


	public function hapus($idf)
    {
        $this->visi_misi->hapusVisiMisi($idf);
        $this->session->set_flashdata('flash','dihapus');
        redirect('visi_misi');
    }
}