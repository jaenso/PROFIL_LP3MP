<?php

class admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_admin();
        $this->load->model('tokoh_m');
        $this->load->model('informasi_m');
        $this->load->model('konten_m');
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
        is_logged_out();
        $data['user'] = get_user();
        $data['title'] = 'Berita';
        $kategori = 'berita';

        $config['base_url'] = 'http://localhost/ci3-test/admin/berita';
        $config['total_rows'] = $this->konten_m->countByKategori($kategori);
        $config['per_page'] = 10;
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['konten'] = $this->konten_m->getKontenPage($config['per_page'], $data['start'], $kategori);
        if ($this->input->post('keyword')) {
            $data['konten'] = $this->berita->cariBerita();
        }
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/konten/index', $data);
        $this->load->view('temp_admin/footer');
    }

    public function pengumuman()
    {
        $data['title'] = 'Pengumuman';
        is_logged_out();
        $data['user'] = get_user();
        $kategori = 'pengumuman';

        $config['base_url'] = 'http://localhost/ci3-test/admin/pengumuman';
        $config['total_rows'] = $this->konten_m->countByKategori($kategori);
        $config['per_page'] = 10;
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['konten'] = $this->konten_m->getKontenPage($config['per_page'], $data['start'], $kategori);
        if ($this->input->post('keyword')) {
            $data['konten'] = $this->pengumuman->cariPengumuman();
        }
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/konten/index', $data);
        $this->load->view('temp_admin/footer');
    }

    public function pelatihan()
    {
        $data['title'] = 'Pelatihan Dosen';
        is_logged_out();
        $data['user'] = get_user();
        $kategori = 'pelatihan';

        $config['base_url'] = 'http://localhost/ci3-test/admin/pelatihan';
        $config['total_rows'] = $this->konten_m->countByKategori($kategori);
        $config['per_page'] = 10;
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['konten'] = $this->konten_m->getKontenPage($config['per_page'], $data['start'], $kategori);
        if ($this->input->post('keyword')) {
            $data['konten'] = $this->pengumuman->cariPelatihan();
        }
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/konten/index', $data);
        $this->load->view('temp_admin/footer');
    }

    public function benchmarking()
    {
        $data['title'] = 'Benchmarking';
        is_logged_out();
        $data['user'] = get_user();
        $kategori = 'benchmarking';

        $config['base_url'] = 'http://localhost/ci3-test/pengunjung/benchmarking';
        $config['total_rows'] = $this->konten_m->countByKategori($kategori);
        $config['per_page'] = 10;
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['konten'] = $this->konten_m->getKontenPage($config['per_page'], $data['start'], $kategori);
        if ($this->input->post('keyword')) {
            $data['konten'] = $this->benchmarking->cariPelatihan();
        }
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/konten/index', $data);
        $this->load->view('temp_admin/footer');
    }

    public function sejarah()
    {
        is_logged_out();
        $data['title'] = 'Sejarah';
        $data['user'] = get_user();
        $data['informasi'] = $this->informasi_m->getInformasi('sejarah');

        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/informasi/index', $data);
        $this->load->view('temp_admin/footer');
    }

    public function visi_misi()
    {
        is_logged_out();
        $data['title'] = 'Visi , Misi dan Tujuan';
        $data['user'] = get_user();
        $data['informasi'] = $this->informasi_m->getAll();

        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/informasi/index', $data);
        $this->load->view('temp_admin/footer');
    }

    public function pengelola()
    {
        $data['title'] = 'Pengelola';
        $data['user'] = get_user();
        $data['informasi'] = $this->informasi_m->getInformasi('pengelola');

        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/informasi/index', $data);
        $this->load->view('temp_admin/footer');
    }

    public function pusat_studi()
    {
        is_logged_out();
        $data['title'] = 'Pusat Studi';
        $data['user'] = get_user();
        $data['informasi'] = $this->informasi_m->getInformasi('pusat_studi');

        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/informasi/index', $data);
        $this->load->view('temp_admin/footer');
    }

    public function tokoh_pengelola()
    {
        is_logged_out();
        $data['title'] = 'Tokoh Pengelola';
        $data['user'] = get_user();
        $kategori = 'pengelola';

        $config['base_url'] = 'http://localhost/ci3-test/admin/tokoh_pengelola';
        $config['total_rows'] = $this->tokoh_m->countByKategori($kategori);
        $config['per_page'] = 5;
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);

        $data['tokoh'] = $this->tokoh_m->getTokohPage($config['per_page'], $data['start'], $kategori);
        if ($this->input->post('keyword')) {
            $data['tokoh'] = $this->tokoh->caritokoh();
        }
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/tokoh/index', $data);
        $this->load->view('temp_admin/footer');
    }

    public function tokoh_pusat_studi()
    {
        is_logged_out();
        $data['title'] = 'Tokoh Pusat Studi';
        $data['user'] = get_user();
        $kategori = 'pusat_studi';

        $config['base_url'] = 'http://localhost/ci3-test/tokoh_pusat_studi';
        $config['total_rows'] = $this->tokoh_m->countByKategori($kategori);
        $config['per_page'] = 5;
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['tokoh'] = $this->tokoh_m->getTokohPage($config['per_page'], $data['start'], $kategori);
        if ($this->input->post('keyword')) {
            $data['tokoh'] = $this->tokoh->caritokoh();
        }
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/tokoh/index', $data);
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
