<?php

class admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_admin();
    }

    public function index()
    {
        is_logged_out();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Dashboard';
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/dashboard');
        $this->load->view('temp_admin/footer');
    }

    public function filterKonten()
    {
        is_logged_out();
        $data['user'] = get_user();
        $data['title'] = 'Filter Konten';
        $config['base_url'] = 'http://localhost/ci3-test/admin/filterKonten';
        $this->load->model('konten_model', 'konten');

        $config['total_rows'] = $this->konten->countAllKonten();
        $config['per_page'] = 10;
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['konten'] = $this->konten->getKontenPage($config['per_page'], $data['start']);
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/filter_konten/index', $data);
        $this->load->view('temp_admin/footer');
    }

    public function getFilterTanggal()
    {
        is_logged_out();
        $data['user'] = get_user();
        $tgl_awal = $this->input->post('start_date');
        $tgl_akhir = $this->input->post('end_date');

        $data['title'] = 'Sertifikat Akreditasi';

        $this->load->model('berita_model', 'berita');
        $data['konten'] = $this->berita->getBeritaByFilter($tgl_awal, $tgl_akhir);
        $config['base_url'] = 'http://localhost/ci3-test/admin/berita';
        $config['total_rows'] = $this->berita->countAllBerita();
        $config['per_page'] = 10;
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/filter_konten/index', $data);
        $this->load->view('temp_admin/footer');
    }

    public function berita()
    {
        $this->load->model('berita_model', 'berita');
        is_logged_out();
        $data['user'] = get_user();
        $data['title'] = 'Berita';

        $config['base_url'] = 'http://localhost/ci3-test/admin/berita';
        $config['total_rows'] = $this->berita->countAllBerita();
        $config['per_page'] = 10;
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['konten'] = $this->berita->getBeritaPage($config['per_page'], $data['start']);
        if ($this->input->post('keyword')) {
            $data['konten'] = $this->berita->cariBerita();
        }
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/berita/index', $data);
        $this->load->view('temp_admin/footer');
    }

    public function pengumuman()
    {
        $this->load->model('pengumuman_model', 'pengumuman');
        $data['title'] = 'Pengumuman';
        is_logged_out();
        $data['user'] = get_user();

        $config['base_url'] = 'http://localhost/ci3-test/admin/pengumuman';
        $config['total_rows'] = $this->pengumuman->countAllPengumuman();
        $config['per_page'] = 10;
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['konten'] = $this->pengumuman->getPengumumanPage($config['per_page'], $data['start']);
        if ($this->input->post('keyword')) {
            $data['konten'] = $this->pengumuman->cariPengumuman();
        }
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/pengumuman/index', $data);
        $this->load->view('temp_admin/footer');
    }

    public function pelatihan()
    {
        $this->load->model('pelatihan_model', 'pelatihan');
        $data['title'] = 'Pelatihan Dosen';
        is_logged_out();
        $data['user'] = get_user();

        $config['base_url'] = 'http://localhost/ci3-test/pengunjung/pelatihan';
        $config['total_rows'] = $this->pelatihan->countAllPelatihan();
        $config['per_page'] = 10;
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['konten'] = $this->pelatihan->getPelatihanPage($config['per_page'], $data['start']);
        if ($this->input->post('keyword')) {
            $data['konten'] = $this->pengumuman->cariPelatihan();
        }
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/pelatihan/index', $data);
        $this->load->view('temp_admin/footer');
    }

    public function benchmarking()
    {
        $this->load->model('benchmarking_model', 'benchmarking');
        $data['title'] = 'Benchmarking';
        is_logged_out();
        $data['user'] = get_user();

        $config['base_url'] = 'http://localhost/ci3-test/pengunjung/benchmarking';
        $config['total_rows'] = $this->benchmarking->countAllBenchmarking();
        $config['per_page'] = 10;
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['konten'] = $this->benchmarking->getBenchmarkingPage($config['per_page'], $data['start']);
        if ($this->input->post('keyword')) {
            $data['konten'] = $this->benchmarking->cariPelatihan();
        }
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/benchmarking/index', $data);
        $this->load->view('temp_admin/footer');
    }

    public function sejarah()
    {
        $this->load->model('sejarah_model', 'sejarah');
        is_logged_out();
        $data['title'] = 'Sejarah';
        $data['user'] = get_user();
        $data['informasi'] = $this->sejarah->getsejarah();
        if ($this->input->post('keyword')) {
            $data['informasi'] = $this->sejarah->cariSejarah();
        }
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/sejarah/index', $data);
        $this->load->view('temp_admin/footer');
    }

    public function visi_misi()
    {
        $this->load->model('visi_misi_model', 'visi_misi');
        is_logged_out();
        $data['title'] = 'Visi dan Misi';
        $data['user'] = get_user();

        $data['informasi'] = $this->visi_misi->getVisiMisi();
        if ($this->input->post('keyword')) {
            $data['informasi'] = $this->visi_misi->cariVisiMisi();
        }
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/visi_misi/index', $data);
        $this->load->view('temp_admin/footer');
    }

    public function pengelola()
    {
        $this->load->model('pengelola_model', 'pengelola');
        $data['title'] = 'Pengelola';
        $data['user'] = get_user();
        $data['informasi'] = $this->pengelola->getPengelola();
        if ($this->input->post('keyword')) {
            $data['informasi'] = $this->pengelola->cariPengelola();
        }
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/pengelola/index', $data);
        $this->load->view('temp_admin/footer');
    }

    public function pusat_studi()
    {
        $this->load->model('pusat_studi_model', 'pusat_studi');
        is_logged_out();
        $data['title'] = 'Pusat Studi';
        $data['user'] = get_user();
        $data['informasi'] = $this->pusat_studi->getPusat_Studi();
        if ($this->input->post('keyword')) {
            $data['informasi'] = $this->pusat_studi->cariPusat_Studi();
        }
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/pusat_studi/index', $data);
        $this->load->view('temp_admin/footer');
    }

    public function tokoh_pengelola()
    {
        $this->load->model('tokoh_pengelola_model', 'tokoh');
        is_logged_out();
        $data['title'] = 'Tokoh Pengelola';
        $data['user'] = get_user();

        $config['base_url'] = 'http://localhost/ci3-test/admin/tokoh_pengelola';
        $config['total_rows'] = $this->tokoh->countAllTokoh();
        $config['per_page'] = 5;
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['tokoh'] = $this->tokoh->gettokohPage($config['per_page'], $data['start']);
        if ($this->input->post('keyword')) {
            $data['tokoh'] = $this->tokoh->caritokoh();
        }
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/tokoh_pengelola/index', $data);
        $this->load->view('temp_admin/footer');
    }

    public function tokoh_pusat_studi()
    {
        $this->load->model('tokoh_pusat_studi_model', 'tokoh');
        is_logged_out();
        $data['title'] = 'Tokoh Pusat Studi';
        $data['user'] = get_user();

        $config['base_url'] = 'http://localhost/ci3-test/tokoh_pusat_studi';
        $config['total_rows'] = $this->tokoh->countAllTokoh();
        $config['per_page'] = 5;
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['tokoh'] = $this->tokoh->gettokohPage($config['per_page'], $data['start']);
        if ($this->input->post('keyword')) {
            $data['tokoh'] = $this->tokoh->caritokoh();
        }
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/tokoh_pusat_studi/index', $data);
        $this->load->view('temp_admin/footer');
    }

    public function dokumen_srt()
    {
        $this->load->model('dok_sertifikat_model', 'dok_sertifikat');
        is_logged_out();
        $data['title'] = 'Dokumen Sertifikat Jurusan';
        $data['user'] = get_user();

        $config['base_url'] = 'http://localhost/ci3-test/admin/dokumen_srt';
        $config['total_rows'] = $this->dok_sertifikat->countAllDokumen();
        $config['per_page'] = 20;
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['dokumen'] = $this->dok_sertifikat->getDokumenPage($config['per_page'], $data['start']);
        if ($this->input->post('keyword')) {
            $data['dokumen'] = $this->dok_sertifikat->cariDokumen();
        }
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/dok_srt/index', $data);
        $this->load->view('temp_admin/footer');
    }

    public function dokumen_lp3mp()
    {
        $this->load->model('dok_lp3mp_model', 'dok_lp3mp');
        is_logged_out();
        $data['title'] = 'Dokumen Organisasi LP3MP';
        $data['user'] = get_user();

        $config['base_url'] = 'http://localhost/ci3-test/admin/dokumen_lp3mp';
        $config['total_rows'] = $this->dok_lp3mp->countAllDokumen();
        $config['per_page'] = 5;
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['dokumen'] = $this->dok_lp3mp->getDokumenPage($config['per_page'], $data['start']);
        if ($this->input->post('keyword')) {
            $data['dokumen'] = $this->dok_lp3mp->cariDokumen();
        }
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/dok_lp3mp/index', $data);
        $this->load->view('temp_admin/footer');
    }

    public function pengaturan_website($idw)
    {
        $this->load->model('pengaturan_website_model', 'website');
        $data['user'] = get_user();
        $data['title'] = 'Pengaturan Website';
        is_logged_out();
        $data['website'] = $this->website->getWebsiteById($idw);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_admin/header', $data);
            $this->load->view('temp_admin/sidebar', $data);
            $this->load->view('admin/pengaturan_website/index', $data);
            $this->load->view('temp_admin/footer');
        } else {
            $gambar_logo = '';
            $gambar_background = '';

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if ($_FILES['logo_userfile']['size'] > 0) {
                if ($this->upload->do_upload('logo_userfile')) {
                    $data = $this->upload->data();
                    $gambar_logo = $data['file_name'];
                }
            }

            if ($_FILES['background_userfile']['size'] > 0) {
                if ($this->upload->do_upload('background_userfile')) {
                    $data = $this->upload->data();
                    $gambar_background = $data['file_name'];
                }
            }

            $idw = $this->input->post('idw');
            $nama = $this->input->post('nama', true);
            $deskripsi = $this->input->post('deskripsi', true);
            $edit_data = array(
                'nama' => $nama,
                'deskripsi' => $deskripsi,
            );

            if ($gambar_logo) {
                $edit_data['logo'] = $gambar_logo;
                unlink('./uploads/' . $data['website']['logo']);
            }

            if ($gambar_background) {
                $edit_data['background'] = $gambar_background;
                unlink('./uploads/' . $data['website']['background']);
            }

            $this->website->ubahWebsite($idw, $edit_data);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('admin/pengaturan_website/1');
        }
    }
}
