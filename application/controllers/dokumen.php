<?php
require FCPATH . 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class dokumen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('dok_sertifikat_model', 'dok_sertifikat');
        $this->load->model('dok_lp3mp_model', 'dok_lp3mp');
        $this->load->library('form_validation');
    }

    public function import_excel()
    {
        if (isset($_FILES['upload_file'])) {
            $upload_file = $_FILES['upload_file']['name'];
            $extension = pathinfo($upload_file, PATHINFO_EXTENSION);

            if ($extension == 'csv') {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
            } else if ($extension == 'xls') {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
            } else {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            }

            $tmp_name = $_FILES['upload_file']['tmp_name'];

            $spreadsheet = $reader->load($tmp_name);
            $sheetdata = $spreadsheet->getActiveSheet()->toArray();

            $sheetcount = count($sheetdata);
            if ($sheetcount > 1) {
                for ($i = 1; $i < $sheetcount; $i++) {
                    $p_studi = $sheetdata[$i][1];
                    $strata = $sheetdata[$i][2];
                    $fakultas = $sheetdata[$i][3];
                    $no_sk = $sheetdata[$i][4];
                    $peringkat = $sheetdata[$i][6];
                    $tgl_kadaluarsa = $sheetdata[$i][8];
                    $status = $sheetdata[$i][9];
                    $keterangan = $sheetdata[$i][11];
                    $link = $sheetdata[$i][12];

                    $this->dok_sertifikat->import(array(
                        'p_studi' => $p_studi,
                        'strata' => $strata,
                        'fakultas' => $fakultas,
                        'no_sk' => $no_sk,
                        'peringkat' => $peringkat,
                        'tgl_kadaluarsa' => $tgl_kadaluarsa,
                        'status' => $status,
                        'keterangan' => $keterangan,
                        'link' => $link
                    ));
                }
                redirect('admin/dokumen_srt');
            }
        }
    }

    public function tambah_dkm_srt()
    {
        $data['user'] = get_user();
        $data['title'] = 'Tambah Sertifikat';
        $this->form_validation->set_rules('p_studi', 'Pusat Studi', 'required');
        $this->form_validation->set_rules('strata', 'Strata', 'required');
        $this->form_validation->set_rules('no_sk', 'Nomor SK', 'required');
        $this->form_validation->set_rules('peringkat', 'Peringkat', 'required');
        $this->form_validation->set_rules('tgl_kadaluarsa', 'Tanggal Kadaluarsa', 'required');
        $this->form_validation->set_rules('status', 'Status Kadaluarsa', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_admin/header', $data);
            $this->load->view('temp_admin/sidebar', $data);
            $this->load->view('admin/dokumen/tambah_srt');
            $this->load->view('temp_admin/footer');
        } else {
            $tambah_data = array(
                "p_studi" => $this->input->post('p_studi', true),
                "strata" => $this->input->post('strata', true),
                "no_sk" => $this->input->post('no_sk', true),
                "peringkat" => $this->input->post('peringkat', true),
                "tgl_kadaluarsa" => $this->input->post('tgl_kadaluarsa', true),
                "link" => $this->input->post('link', true),
                "status" => $this->input->post('status', true)
            );
            $this->dok_sertifikat->tambahDokumen($tambah_data);
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('admin/dokumen_srt');
        }
    }

    public function edit_dkm_srt($idk)
    {
        $data['user'] = get_user();
        $data['title'] = 'Ubah Sertifikat';
        $data['dokumen'] = $this->dok_sertifikat->getDokumenById($idk);

        $this->form_validation->set_rules('p_studi', 'Pusat Studi', 'required');
        $this->form_validation->set_rules('strata', 'Strata', 'required');
        $this->form_validation->set_rules('no_sk', 'Nomor SK', 'required');
        $this->form_validation->set_rules('peringkat', 'Peringkat', 'required');
        $this->form_validation->set_rules('tgl_kadaluarsa', 'Tanggal Kadaluarsa', 'required');
        $this->form_validation->set_rules('status', 'Status Kadaluarsa', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_admin/header', $data);
            $this->load->view('temp_admin/sidebar', $data);
            $this->load->view('admin/dokumen/edit_srt', $data);
            $this->load->view('temp_admin/footer');
        } else {
            $idk = $this->input->post('idk');
            $edit_data = array(
                "p_studi" => $this->input->post('p_studi', true),
                "strata" => $this->input->post('strata', true),
                "no_sk" => $this->input->post('no_sk', true),
                "link" => $this->input->post('link', true),
                "peringkat" => $this->input->post('peringkat', true),
                "tgl_kadaluarsa" => $this->input->post('tgl_kadaluarsa', true),
                "status" => $this->input->post('status', true)
            );
            $this->dok_sertifikat->ubahDokumen($idk, $edit_data);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('admin/dokumen_srt');
        }
    }

    public function hapus_dkm_srt($idk)
    {
        $this->dok_sertifikat->hapusDokumen($idk);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('admin/dokumen_srt');
    }

    public function tambah_dkm()
    {
        $data['user'] = get_user();
        $data['title'] = 'Tambah Dokumen';
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('format', 'Format', 'required');
        $this->form_validation->set_rules('link', 'Link', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_admin/header', $data);
            $this->load->view('temp_admin/sidebar', $data);
            $this->load->view('admin/dokumen/tambah_lp3mp');
            $this->load->view('temp_admin/footer');
        } else {
            $tambah_data = array(
                "nama" => $this->input->post('nama', true),
                "format" => $this->input->post('format', true),
                "link" => $this->input->post('link', true),
            );
            $this->dok_lp3mp->tambahDokumen($tambah_data);
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('admin/dokumen_lp3mp');
        }
    }

    public function edit_dkm($idk)
    {
        $data['user'] = get_user();
        $data['title'] = 'Ubah Dokumen';
        $data['dokumen'] = $this->dok_lp3mp->getDokumenById($idk);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('format', 'Format', 'required');
        $this->form_validation->set_rules('link', 'Link', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_admin/header', $data);
            $this->load->view('temp_admin/sidebar', $data);
            $this->load->view('admin/dokumen/edit_lp3mp', $data);
            $this->load->view('temp_admin/footer');
        } else {
            $idk = $this->input->post('idk');
            $edit_data = array(
                "nama" => $this->input->post('nama', true),
                "format" => $this->input->post('format', true),
                "link" => $this->input->post('link', true),
            );
            $this->dok_lp3mp->ubahDokumen($idk, $edit_data);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('admin/dokumen_lp3mp');
        }
    }

    public function hapus_dkm($idk)
    {
        $this->dok_lp3mp->hapusDokumen($idk);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('admin/dokumen_lp3mp');
    }
}
