<?php

class tokoh extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('tokoh_m');
        $this->load->library('form_validation');
    }

    public function tambah($kategori)
    {
        $data['user'] = get_user();
        $data['title'] = 'Tambah Tokoh ';

        if ($kategori == 'pengelola') {
            $data['title'] .= 'Pengelola';
        } elseif ($kategori == 'pusat_studi') {
            $data['title'] .= 'Pusat Manajemen Mutu';
        } elseif ($kategori == 'akreditasi') {
            $data['title'] .= 'Pusat Pengelolaan Akreditasi';
        } elseif ($kategori == 'kompetensi') {
            $data['title'] .= 'Pusat Pelatihan dan Pengembangan Kompetisi Sumber Daya Manusia';
        } elseif ($kategori == 'mbkm') {
            $data['title'] .= 'Pusat Pengelolaan Merdeka Belajar Kampus Merdeka dan Kurikulum';
        } elseif ($kategori == 'pangkalan_data') {
            $data['title'] .= 'Pusat Pangkalan Data dan Sistem Informasi Mutu Akademik';
        }

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('kantor', 'kantor', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi Pekerjaan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_admin/header', $data);
            $this->load->view('temp_admin/sidebar', $data);
            $this->load->view('admin/tokoh/tambah');
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
                $this->load->view('admin/tokoh/tambah', $error);
                $this->load->view('temp_admin/footer');
            } else {
                $data_upload = $this->upload->data();
                $gambar = $data_upload['file_name'];

                if ($kategori == 'pusat_studi') {
                    $id_kategori = 5;
                } elseif ($kategori == 'pengelola') {
                    $id_kategori = 6;
                } elseif ($kategori == 'akreditasi') {
                    $id_kategori = 15;
                } elseif ($kategori == 'kompetensi') {
                    $id_kategori = 16;
                } elseif ($kategori == 'mbkm') {
                    $id_kategori = 17;
                } elseif ($kategori == 'pangkalan_data') {
                    $id_kategori = 18;
                }

                $data = array(
                    "id_kategori" => $id_kategori,
                    "jabatan" => $this->input->post('jabatan', true),
                    "nama" => $this->input->post('nama', true),
                    "nip" => $this->input->post('nip', true),
                    "kantor" => $this->input->post('kantor', true),
                    "deskripsi" => $this->input->post('deskripsi', true),
                    'gambar' => $gambar
                );

                $this->tokoh_m->tambah($data);
                $this->session->set_flashdata('flash', 'ditambahkan');
                if ($kategori == 'pengelola') {
                    redirect('admin/tokoh_pengelola');
                } elseif ($kategori == 'pusat_studi') {
                    redirect('admin/tokoh_pusat_studi');
                } elseif ($kategori == 'akreditasi') {
                    redirect('admin/tokoh_akreditasi');
                } elseif ($kategori == 'kompetensi') {
                    redirect('admin/tokoh_kompetensi');
                } elseif ($kategori == 'mbkm') {
                    redirect('admin/tokoh_mbkm');
                } elseif ($kategori == 'pangkalan_data') {
                    redirect('admin/tokoh_pangkalan_data');
                }
            }
        }
    }

    public function edit($id, $kategori)
    {
        $data['user'] = get_user();
        $data['title'] = 'Ubah Tokoh ';

        if ($kategori == 'pengelola') {
            $data['title'] .= 'Pengelola';
        } elseif ($kategori == 'pusat_studi') {
            $data['title'] .= 'Pusat Manajemen Mutu';
        } elseif ($kategori == 'akreditasi') {
            $data['title'] .= 'Pusat Pengelolaan Akreditasi';
        } elseif ($kategori == 'kompetensi') {
            $data['title'] .= 'Pusat Pelatihan dan Pengembangan Kompetisi Sumber Daya Manusia';
        } elseif ($kategori == 'mbkm') {
            $data['title'] .= 'Pusat Pengelolaan Merdeka Belajar Kampus Merdeka dan Kurikulum';
        } elseif ($kategori == 'pangkalan_data') {
            $data['title'] .= 'Pusat Pangkalan Data dan Sistem Informasi Mutu Akademik';
        }

        $data['tokoh'] = $this->tokoh_m->getTokohById($id);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('kantor', 'kantor', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi Pekerjaan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_admin/header', $data);
            $this->load->view('temp_admin/sidebar', $data);
            $this->load->view('admin/tokoh/edit', $data);
            $this->load->view('temp_admin/footer');
        } else {
            $gambar_lama = $data['tokoh']['gambar'];
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
                    $this->load->view('admin/tokoh/edit', $error);
                    $this->load->view('temp_admin/footer');
                } else {
                    $data_upload = $this->upload->data();
                    $gambar_baru = $data_upload['file_name'];
                }
            }
            $nama = $this->input->post('nama', true);
            $nip = $this->input->post('nip', true);
            $deskripsi = $this->input->post('deskripsi', true);
            $kantor = $this->input->post('kantor', true);

            if (!empty($gambar_baru)) {
                $edit_data = array(
                    "jabatan" => $this->input->post('jabatan', true),
                    'nama' => $nama,
                    'nip' => $nip,
                    'deskripsi' => $deskripsi,
                    'kantor' => $kantor,
                    'gambar' => $gambar_baru
                );
                unlink('./uploads/' . $gambar_lama);
            } else {
                $edit_data = array(
                    'nama' => $nama,
                    'nip' => $nip,
                    'deskripsi' => $deskripsi,
                    'kantor' => $kantor
                );
            }
            $this->tokoh_m->ubah($id, $edit_data);
            $this->session->set_flashdata('flash', 'diubah');
            if ($kategori == 'pengelola') {
                redirect('admin/tokoh_pengelola');
            } elseif ($kategori == 'pusat_studi') {
                redirect('admin/tokoh_pusat_studi');
            } elseif ($kategori == 'akreditasi') {
                redirect('admin/tokoh_akreditasi');
            } elseif ($kategori == 'kompetensi') {
                redirect('admin/tokoh_kompetensi');
            } elseif ($kategori == 'mbkm') {
                redirect('admin/tokoh_mbkm');
            } elseif ($kategori == 'pangkalan_data') {
                redirect('admin/tokoh_pangkalan_data');
            }
        }
    }


    public function hapus($id, $kategori)
    {
        if ($kategori == 'pengelola' || $kategori == 'pusat_studi' || $kategori == 'akreditasi' || $kategori == 'kompetensi' || $kategori == 'mbkm' || $kategori == 'pangkalan_data') {
            $this->tokoh_m->hapus($id);
            $this->session->set_flashdata('flash', 'dihapus');
            redirect('admin/tokoh_' . $kategori);
        }
    }
}
