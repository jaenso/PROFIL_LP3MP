<?php

class konten extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('berita_model', 'berita');
        $this->load->model('pengumuman_model', 'pengumuman');
        $this->load->library('form_validation');
    }

    public function tambah_pgm()
    {
        $data['user'] = get_user();
        $data['title'] = 'Tambah Pengumuman';
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_admin/header', $data);
            $this->load->view('temp_admin/sidebar', $data);
            $this->load->view('admin/konten/tambah');
            $this->load->view('temp_admin/footer');
        } else {
            $gambar = '';
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('userfile')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('temp_admin/header', $data);
                $this->load->view('temp_admin/sidebar', $data);
                $this->load->view('admin/konten/tambah', $error);
                $this->load->view('temp_admin/footer');
            } else {
                $data = $this->upload->data();
                $gambar = $data['file_name'];
            }
            $data = array('upload_data' => $this->upload->data());
            $tambah_data = array(
                "id_kategori" => 2,
                "tanggal" => $this->input->post('tanggal', true),
                "judul" => $this->input->post('judul', true),
                "isi" => $this->input->post('isi', true),
                'gambar' => $gambar
            );

            $this->berita->tambahBerita($tambah_data);
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('admin/pengumuman');
        }
    }

    public function edit_pgm($idk)
    {
        $data['user'] = get_user();
        $data['title'] = 'Ubah Berita';
        $data['konten'] = $this->berita->getBeritaById($idk);

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_admin/header', $data);
            $this->load->view('temp_admin/sidebar', $data);
            $this->load->view('admin/konten/edit', $data);
            $this->load->view('temp_admin/footer');
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
                    $this->load->view('temp_admin/header', $data);
                    $this->load->view('temp_admin/sidebar', $data);
                    $this->load->view('admin/konten/edit', $error);
                    $this->load->view('temp_admin/footer');
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
            redirect('admin/pengumuman');
        }
    }

    public function hapus_pgm($idk)
    {
        $this->berita->hapusBerita($idk);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('admin/pengumuman');
    }

    public function tambah_brt()
    {
        $data['user'] = get_user();
        $data['title'] = 'Tambah Berita';
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_admin/header', $data);
            $this->load->view('temp_admin/sidebar', $data);
            $this->load->view('admin/konten/tambah');
            $this->load->view('temp_admin/footer');
        } else {
            $gambar = '';
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('userfile')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('temp_admin/header', $data);
                $this->load->view('temp_admin/sidebar', $data);
                $this->load->view('admin/konten/tambah', $error);
                $this->load->view('temp_admin/footer');
            } else {
                $data = $this->upload->data();
                $gambar = $data['file_name'];
            }
            $data = array('upload_data' => $this->upload->data());
            $tambah_data = array(
                "id_kategori" => 1,
                "tanggal" => $this->input->post('tanggal', true),
                "judul" => $this->input->post('judul', true),
                "isi" => $this->input->post('isi', true),
                'gambar' => $gambar
            );

            $this->berita->tambahBerita($tambah_data);
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('admin/berita');
        }
    }

    public function edit_brt($idk)
    {
        $data['user'] = get_user();
        $data['title'] = 'Ubah Berita';
        $data['konten'] = $this->berita->getBeritaById($idk);

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_admin/header', $data);
            $this->load->view('temp_admin/sidebar', $data);
            $this->load->view('admin/konten/edit', $data);
            $this->load->view('temp_admin/footer');
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
                    $this->load->view('temp_admin/header', $data);
                    $this->load->view('temp_admin/sidebar', $data);
                    $this->load->view('admin/konten/edit', $error);
                    $this->load->view('temp_admin/footer');
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
            redirect('admin/berita');
        }
    }

    public function hapus_brt($idk)
    {
        $this->berita->hapusBerita($idk);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('admin/berita');
    }
}
