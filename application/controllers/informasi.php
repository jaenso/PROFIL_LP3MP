<?php

class informasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('informasi_m');
        $this->load->library('form_validation');
        is_logged_out();
    }
    public function edit($id, $kategori)
    {
        $data['user'] = get_user();
        $data['title'] = 'Ubah Data ';

        if ($kategori == 'visi') {
            $data['title'] .= 'Visi';
        } elseif ($kategori == 'misi') {
            $data['title'] .= 'Misi';
        } elseif ($kategori == 'tujuan') {
            $data['title'] .= 'Tujuan';
        } elseif ($kategori == 'pengelola') {
            $data['title'] .= 'Pengelola';
        } elseif ($kategori == 'sejarah') {
            $data['title'] .= 'Sejarah';
        } elseif ($kategori == 'pusat_studi') {
            $data['title'] .= 'Pusat Studi';
        } elseif ($kategori == 'mutu') {
            $data['title'] .= 'Mutu Pendidikan';
        } elseif ($kategori == 'akreditasi') {
            $data['title'] .= 'Akreditasi';
        } elseif ($kategori == 'kompetensi') {
            $data['title'] .= 'Kompetensi';
        } elseif ($kategori == 'mbkm') {
            $data['title'] .= 'MBKM';
        } elseif ($kategori == 'pangkalan_data') {
            $data['title'] .= 'Pangkalan Data';
        }
        $data['informasi'] = $this->informasi_m->getInformasiById($id);

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_admin/header', $data);
            $this->load->view('temp_admin/sidebar', $data);
            $this->load->view('admin/informasi/edit', $data);
            $this->load->view('temp_admin/footer');
        } else {
            $edit = [
                "judul" => $this->input->post('judul', true),
                "isi" => $this->input->post('isi', true)
            ];
            $this->informasi_m->ubahInformasi($id, $edit);

            $this->session->set_flashdata('flash', 'diubah');

            if ($kategori == 'visi' || $kategori == 'misi' || $kategori == 'tujuan') {
                redirect('admin/visi_misi');
            } elseif ($kategori == 'pengelola') {
                redirect('admin/pengelola');
            } elseif ($kategori == 'pengelola') {
                redirect('admin/pengelola');
            } elseif ($kategori == 'sejarah') {
                redirect('admin/sejarah');
            } elseif ($kategori == 'pusat_studi') {
                redirect('admin/pusat_studi');
            } elseif ($kategori == 'mutu') {
                redirect('admin/mutu');
            } elseif ($kategori == 'akreditasi') {
                redirect('admin/akreditasi');
            } elseif ($kategori == 'kompetensi') {
                redirect('admin/kompetensi');
            } elseif ($kategori == 'mbkm') {
                redirect('admin/mbkm');
            } elseif ($kategori == 'pangkalan_data') {
                redirect('admin/pangkalan_data');
            } else {
                redirect('admin');
            }
        }
    }
}
