<?php

class konten extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('konten_m');
        $this->load->library('form_validation');
    }

    public function tambah($kategori)
    {
        $data['user'] = get_user();
        $data['title'] = 'Tambah Data ';
        if ($kategori == 'berita') {
            $data['title'] .= 'Berita';
        } elseif ($kategori == 'pengumuman') {
            $data['title'] .= 'Pengumuman';
        } elseif ($kategori == 'pelatihan') {
            $data['title'] .= 'Pelatihan';
        } elseif ($kategori == 'benchmarking') {
            $data['title'] .= 'Benchmarking';
        }

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
                $data = array('upload_data' => $this->upload->data());
                if ($kategori == 'berita') {
                    $id_kategori = 1;
                } elseif ($kategori == 'pengumuman') {
                    $id_kategori = 2;
                } elseif ($kategori == 'pelatihan') {
                    $id_kategori = 10;
                } elseif ($kategori == 'benchmarking') {
                    $id_kategori = 11;
                }

                $data = array(
                    "id_kategori" => $id_kategori,
                    "tanggal" => $this->input->post('tanggal', true),
                    "judul" => $this->input->post('judul', true),
                    "isi" => $this->input->post('isi', true),
                    'gambar' => $gambar
                );

                $this->konten_m->tambah($data);
                $this->session->set_flashdata('flash', 'ditambahkan');

                if ($kategori == 'berita') {
                    redirect('admin/berita');
                } elseif ($kategori == 'pengumuman') {
                    redirect('admin/pengumuman');
                } elseif ($kategori == 'pelatihan') {
                    redirect('admin/pelatihan');
                } elseif ($kategori == 'benchmarking') {
                    redirect('admin/benchmarking');
                }
            }
        }
    }

    public function edit($id, $kategori)
    {
        $data['user'] = get_user();
        $data['title'] = 'Ubah ';
        if ($kategori == 'berita') {
            $data['title'] .= 'Berita';
        } elseif ($kategori == 'pengumuman') {
            $data['title'] .= 'Pengumuman';
        } elseif ($kategori == 'pelatihan') {
            $data['title'] .= 'Pelatihan';
        } elseif ($kategori == 'benchmarking') {
            $data['title'] .= 'Benchmarking';
        }

        $data['konten'] = $this->konten_m->getKontenById($id);

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
            $tanggal = $this->input->post('tanggal', true);
            $judul = $this->input->post('judul', true);
            $isi = $this->input->post('isi', true);
            if (!empty($gambar_baru)) {
                $data = array(
                    'tanggal' => $tanggal,
                    'judul' => $judul,
                    'isi' => $isi,
                    'gambar' => $gambar_baru
                );
                unlink('./uploads/' . $gambar_lama);
            } else {
                $data = array(
                    'tanggal' => $tanggal,
                    'judul' => $judul,
                    'isi' => $isi
                );
            }

            $this->konten_m->ubah($id, $data);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('admin/' . $kategori);
        }
    }

    public function hapus($id, $kategori)
    {
        if ($kategori == 'berita' || $kategori == 'pengumuman' || $kategori == 'pelatihan' || $kategori == 'benchmarking') {
            $this->konten_m->hapus($id);
            $this->session->set_flashdata('flash', 'dihapus');
            redirect('admin/' . $kategori);
        }
    }

    public function detail($id)
    {
        $data['title'] = 'Konten Berita';
        $data['konten_lain'] = $this->konten_m->getAllKonten();
        $data['konten'] = $this->konten_m->getDetailKonten($id);
        $this->load->view('temp_pengunjung/header', $data);
        $this->load->view('pengunjung/konten/isi_konten', $data);
        $this->load->view('temp_pengunjung/footer');
    }
}
