<?php

class Pengumuman extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('pengumuman_model', 'pengumuman');
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data['tittle'] = 'Pengumuman';
        $config['base_url'] = 'http://localhost/ci3-sql/pengumuman/index';
        $config['num_links'] = 5;
        $config['total_rows'] = $this->pengumuman->countAllPengumuman();
        $config['per_page'] = 2;
                //STYLING
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
		$data['konten'] = $this->pengumuman->getPengumumanPage($config['per_page'] ,$data['start']);
        if($this->input->post('keyword')){
            $data['konten'] = $this->pengumuman->cariPengumuman();
        }
		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar', $data);
		$this->load->view('admin/pengumuman/index', $data);
		$this->load->view('template_admin/footer');
	}

    public function tambah()
    {
		$data['tittle'] = 'Tambah Pengumuman';
		$this->form_validation->set_rules('judul','Judul','required');
        $this->form_validation->set_rules('isi','Isi','required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('template_admin/header', $data);
			$this->load->view('template_admin/sidebar', $data);
			$this->load->view('admin/pengumuman/tambah');
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
                    $this->load->view('admin/pengumuman/tambah', $error);
                    $this->load->view('template_admin/footer');
                } else {
                    $data = $this->upload->data();
                    $gambar = $data['file_name'];
                }
                $tambah_data = array(
                    "id_kategori" => $this->input->post('id_ktg', true),
                    "tanggal" => $this->input->post('tanggal', true),
                    "judul" => $this->input->post('judul', true),
                    "isi" => $this->input->post('isi', true),
                    'gambar' => $gambar
                );
            $this->pengumuman->tambahPengumuman($tambah_data);
			$this->session->set_flashdata('flash','ditambahkan');
            redirect('pengumuman');
        }
    }

    public function edit($idk)
    {
        $data['tittle'] = 'Ubah Pengumuman';
        $data['konten'] = $this->pengumuman->getPengumumanById($idk);

        $this->form_validation->set_rules('judul','Judul','required');
        $this->form_validation->set_rules('isi','Isi','required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('template_admin/header', $data);
			$this->load->view('template_admin/sidebar', $data);
			$this->load->view('admin/pengumuman/edit', $data);
			$this->load->view('template_admin/footer');
        }
        else
        {
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
                        $this->load->view('admin/pengumuman/edit', $error);
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
            $this->pengumuman->ubahPengumuman($idk, $edit_data);
            $this->session->set_flashdata('flash','diubah');
            redirect('pengumuman');
        }
    }


	public function hapus($idk)
    {
        $this->pengumuman->hapusPengumuman($idk);
        $this->session->set_flashdata('flash','dihapus');
        redirect('pengumuman');
    }
}