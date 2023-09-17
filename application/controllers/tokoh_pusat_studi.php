<?php

class tokoh_pusat_studi extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('tokoh_pusat_studi_model', 'tokoh');
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data['tittle'] = 'Tokoh Pusat Studi';
        $config['base_url'] = 'http://localhost/ci3-sql/tokoh_pusat_studi/index';
        $config['num_links'] = 5;

        $config['total_rows'] = $this->tokoh->countAllTokoh();
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
		$data['tokoh'] = $this->tokoh->gettokohPage($config['per_page'] ,$data['start']);
        if($this->input->post('keyword')){
            $data['tokoh'] = $this->tokoh->caritokoh();
        }
		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar', $data);
		$this->load->view('admin/tokoh_pusat_studi/index', $data);
		$this->load->view('template_admin/footer');
	}

    public function tambah()
    {
		$data['tittle'] = 'Tambah Tokoh Pusat Studi';
		$this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('nip','NIP','required');
        $this->form_validation->set_rules('golongan','Golongan','required');
        $this->form_validation->set_rules('deskripsi','Deskripsi Pekerjaan','required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('template_admin/header', $data);
			$this->load->view('template_admin/sidebar', $data);
			$this->load->view('admin/tokoh_pusat_studi/tambah');
			$this->load->view('template_admin/footer');
        }
        else
        {
            $gambar = '';
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 2048;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('userfile')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('template_admin/header', $data);
                $this->load->view('template_admin/sidebar', $data);
                $this->load->view('admin/tokoh_pusat_studi/tambah', $error);
                $this->load->view('template_admin/footer');
            } else {
                $data = $this->upload->data();
                $gambar = $data['file_name'];
            }
                $tambah_data = array(
                    "id_kategori" => $this->input->post('id_ktg', true),
                    "nama" => $this->input->post('nama', true),
                    "nip" => $this->input->post('nip', true),
                    "golongan" => $this->input->post('golongan', true),
                    "deskripsi" => $this->input->post('deskripsi', true),
                    'gambar' => $gambar
                );

            $this->tokoh->tambahTokoh($tambah_data);
			$this->session->set_flashdata('flash','ditambahkan');
            redirect('tokoh_pusat_studi');
        }
        }

        public function edit($idk)
    {
        $data['tittle'] = 'Ubah Tokoh Pusat Studi';
        $data['tokoh'] = $this->tokoh->getTokohById($idk);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('nip', 'NIP', 'required');
            $this->form_validation->set_rules('golongan', 'Golongan', 'required');
            $this->form_validation->set_rules('deskripsi', 'Deskripsi Pekerjaan', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('template_admin/header', $data);
			$this->load->view('template_admin/sidebar', $data);
			$this->load->view('admin/tokoh_pusat_studi/edit', $data);
			$this->load->view('template_admin/footer');
        }
        else
        {
                $gambar_lama = $data['tokoh']['gambar'];
                $gambar_baru = '';
        
                if ($_FILES['userfile']['size'] > 0) {
                    $config['upload_path'] = './uploads/';
                    $config['allowed_types'] = 'jpg|jpeg|png';
                    $config['max_size'] = 2048;
        
                    $this->load->library('upload', $config);
        
                    if (!$this->upload->do_upload('userfile')) {
                        $error = array('error' => $this->upload->display_errors());
                        $this->load->view('template_admin/header', $data);
                        $this->load->view('template_admin/sidebar', $data);
                        $this->load->view('admin/tokoh_pusat_studi/edit', $error);
                        $this->load->view('template_admin/footer');
                    } else {
                        $data = $this->upload->data();
                        $gambar_baru = $data['file_name'];
                    }
                }
                $idt = $this->input->post('idt');
                $nama = $this->input->post('nama', true);
                $nip = $this->input->post('nip', true);
                $deskripsi = $this->input->post('deskripsi', true);
                $golongan = $this->input->post('golongan', true);
                if (!empty($gambar_baru)) {
                    $edit_data = array(
                        'nama' => $nama,
                        'nip' => $nip,
                        'deskripsi' => $deskripsi,
                        'golongan' => $golongan,
                        'gambar' => $gambar_baru
                    );
                    unlink('./uploads/' . $gambar_lama);
                } else {
                    $edit_data = array(
                        'nama' => $nama,
                        'nip' => $nip,
                        'deskripsi' => $deskripsi,
                        'golongan' => $golongan
                    );
                }
            $this->tokoh->ubahTokoh($idt, $edit_data);
            $this->session->set_flashdata('flash','diubah');
            redirect('tokoh_pusat_studi');
        }
    }
        


	public function hapus($idt)
    {
        $this->tokoh->hapusTokoh($idt);
        $this->session->set_flashdata('flash','dihapus');
        redirect('tokoh_pengelola');
    }
}