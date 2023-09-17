<?php

class berita extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('berita_model', 'berita');
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data['tittle'] = 'Berita';
        $config['base_url'] = 'http://localhost/ci3-sql/berita/index';
        $config['num_links'] = 5;
        
        $config['total_rows'] = $this->berita->countAllBerita();
        $config['per_page'] = 2;

        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
		$data['konten'] = $this->berita->getBeritaPage($config['per_page'] ,$data['start']);
        if($this->input->post('keyword')){
            $data['konten'] = $this->berita->cariBerita();
        }
		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar', $data);
		$this->load->view('admin/berita/index', $data);
		$this->load->view('template_admin/footer');
	}

    public function tambah()
    {
		$data['tittle'] = 'Tambah Berita';
		$this->form_validation->set_rules('judul','Judul','required');
        $this->form_validation->set_rules('isi','Isi','required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('template_admin/header', $data);
			$this->load->view('template_admin/sidebar', $data);
			$this->load->view('admin/berita/tambah');
			$this->load->view('template_admin/footer');
        }
        else
        {
            $gambar = '';
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('userfile')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('template_admin/header', $data);
                $this->load->view('template_admin/sidebar', $data);
                $this->load->view('admin/berita/tambah', $error);
                $this->load->view('template_admin/footer');
            } else {
                $data = $this->upload->data();
                $gambar = $data['file_name'];
            }
            $data = array('upload_data' => $this->upload->data());
            $tambah_data = array(
                "id_kategori" => $this->input->post('id_ktg', true),
                "tanggal" => $this->input->post('tanggal', true),
                "judul" => $this->input->post('judul', true),
                "isi" => $this->input->post('isi', true),
                'gambar' => $data['upload_data']['file_name']
            );

            $this->berita->tambahBerita($tambah_data);
			$this->session->set_flashdata('flash','ditambahkan');
            redirect('berita');
        }
        }

        public function edit($idk)
        {
            $data['tittle'] = 'Ubah Berita';
            $data['konten'] = $this->berita->getBeritaById($idk);
        
            $this->form_validation->set_rules('judul', 'Judul', 'required');
            $this->form_validation->set_rules('isi', 'Isi', 'required');
        
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('template_admin/header', $data);
                $this->load->view('template_admin/sidebar', $data);
                $this->load->view('admin/berita/edit', $data);
                $this->load->view('template_admin/footer');
            } else {
                $gambar_lama = $data['konten']['gambar'];
                $gambar_baru = '';
        
                if ($_FILES['userfile']['size'] > 0) {
                    $config['upload_path'] = './uploads/';
                    $config['allowed_types'] = 'jpg|jpeg|png';
                    $config['max_size'] = 2048;
                    $config['encrypt_name'] = TRUE;
        
                    $this->load->library('upload', $config);
        
                    if (!$this->upload->do_upload('userfile')) {
                        $error = array('error' => $this->upload->display_errors());
                        $this->load->view('template_admin/header', $data);
                        $this->load->view('template_admin/sidebar', $data);
                        $this->load->view('admin/berita/edit', $error);
                        $this->load->view('template_admin/footer');
                    } else {
                        $data = $this->upload->data();
                        $gambar_baru = $data['file_name'];
                    }
                }
                $idk = $this->input->post('idk');
                $tanggal = $this->input->post('tanggal', true);
                $judul = $this->input->post('judul', true);
                $isi = $this->input->post('isi', true);
                if (!empty($gambar_baru)) {
                    $edit_data = array(
                        'tanggal' => $tanggal,
                        'judul' => $judul,
                        'isi' => $isi,
                        'gambar' => $gambar_baru
                    );
                    unlink('./uploads/' . $gambar_lama);
                } else {
                    $edit_data = array(
                        'tanggal' => $tanggal,
                        'judul' => $judul,
                        'isi' => $isi
                    );
                }
        
                $this->berita->ubahBerita($idk, $edit_data);
                $this->session->set_flashdata('flash', 'diubah');
                redirect('berita');
            }
        }        


	public function hapus($idk)
    {
        $this->berita->hapusBerita($idk);
        $this->session->set_flashdata('flash','dihapus');
        redirect('berita');
    }
}