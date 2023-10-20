<?php

class tokoh extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('tokoh_pengelola_model', 'tokoh_pgl');
        $this->load->model('tokoh_pusat_studi_model', 'tokoh_ps');
        $this->load->library('form_validation');
    }

    public function tambah_pgl()
    {
        $data['user'] = get_user();
        $data['tittle'] = 'Tambah Tokoh Pengelola';
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('golongan', 'Golongan', 'required');
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

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('userfile')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('temp_admin/header', $data);
                $this->load->view('temp_admin/sidebar', $data);
                $this->load->view('admin/tokoh/tambah', $error);
                $this->load->view('temp_admin/footer');
            } else {
                $data = $this->upload->data();
                $gambar = $data['file_name'];
            }
            $tambah_data = array(
                "id_kategori" => 6,
                "nama" => $this->input->post('nama', true),
                "nip" => $this->input->post('nip', true),
                "golongan" => $this->input->post('golongan', true),
                "deskripsi" => $this->input->post('deskripsi', true),
                'gambar' => $gambar
            );

            $this->tokoh_pgl->tambahTokoh($tambah_data);
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('admin/tokoh_pengelola');
        }
    }

    public function edit_pgl($idk)
    {
        $data['user'] = get_user();
        $data['tittle'] = 'Ubah Tokoh Pengelola';
        $data['tokoh'] = $this->tokoh_pgl->getTokohById($idk);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('golongan', 'Golongan', 'required');
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

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('userfile')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('temp_admin/header', $data);
                    $this->load->view('temp_admin/sidebar', $data);
                    $this->load->view('admin/tokoh/edit', $error);
                    $this->load->view('temp_admin/footer');
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
            $this->tokoh_pgl->ubahTokoh($idt, $edit_data);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('admin/tokoh_pengelola');
        }
    }

    public function hapus_pgl($idt)
    {
        $this->tokoh_pgl->hapusTokoh($idt);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('admin/tokoh_pengelola');
    }

    public function tambah_ps()
    {
        $data['user'] = get_user();
        $data['tittle'] = 'Tambah Tokoh Pusat Studi';
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('golongan', 'Golongan', 'required');
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

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('userfile')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('temp_admin/header', $data);
                $this->load->view('temp_admin/sidebar', $data);
                $this->load->view('admin/tokoh/tambah', $error);
                $this->load->view('temp_admin/footer');
            } else {
                $data = $this->upload->data();
                $gambar = $data['file_name'];
            }
            $tambah_data = array(
                "id_kategori" => 5,
                "nama" => $this->input->post('nama', true),
                "nip" => $this->input->post('nip', true),
                "golongan" => $this->input->post('golongan', true),
                "deskripsi" => $this->input->post('deskripsi', true),
                'gambar' => $gambar
            );

            $this->tokoh_ps->tambahTokoh($tambah_data);
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('admin/tokoh_pusat_studi');
        }
    }

    public function edit_ps($idk)
    {
        $data['user'] = get_user();
        $data['tittle'] = 'Ubah Tokoh Pusat Studi';
        $data['tokoh'] = $this->tokoh_ps->getTokohById($idk);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('golongan', 'Golongan', 'required');
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

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('userfile')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('temp_admin/header', $data);
                    $this->load->view('temp_admin/sidebar', $data);
                    $this->load->view('admin/tokoh/edit', $error);
                    $this->load->view('temp_admin/footer');
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
            $this->tokoh_ps->ubahTokoh($idt, $edit_data);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('admin/tokoh_pusat_studi');
        }
    }

    public function hapus_ps($idt)
    {
        $this->tokoh_ps->hapusTokoh($idt);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('admin/tokoh_pusat_studi');
    }
}
