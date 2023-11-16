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
        // $config['total_rows'] = $this->konten_m->countByKategori($kategori);
        $data['title'] = 'Dashboard';
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/dashboard');
        $this->load->view('temp_admin/footer');
    }

    public function berita()
    {
        is_logged_out();
        $data['user'] = get_user();
        $data['title'] = 'Berita';
        $kategori = 'berita';
        $data['konten'] = $this->konten_m->getKonten($kategori);
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
        $data['konten'] = $this->konten_m->getKonten($kategori);
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
        $data['konten'] = $this->konten_m->getKonten($kategori);
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
        $data['konten'] = $this->konten_m->getKonten($kategori);
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/konten/index', $data);
        $this->load->view('temp_admin/footer');
    }

    public function ami()
    {
        $data['title'] = 'AMI';
        is_logged_out();
        $data['user'] = get_user();
        $kategori = 'ami';
        $data['konten'] = $this->konten_m->getKonten($kategori);
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

    public function akreditasi()
    {
        is_logged_out();
        $data['title'] = 'Pusat Pengelolaan Akreditasi';
        $data['user'] = get_user();
        $data['informasi'] = $this->informasi_m->getInformasi('akreditasi');

        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/informasi/index', $data);
        $this->load->view('temp_admin/footer');
    }

    public function kompetensi()
    {
        is_logged_out();
        $data['title'] = 'Pusat Pelatihan dan Pengembangan Kompetisi Sumber Daya Manusia';
        $data['user'] = get_user();
        $data['informasi'] = $this->informasi_m->getInformasi('kompetensi');

        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/informasi/index', $data);
        $this->load->view('temp_admin/footer');
    }

    public function mbkm()
    {
        is_logged_out();
        $data['title'] = 'Pusat Pengelolaan Merdeka Belajar Kampus Merdeka dan Kurikulum';
        $data['user'] = get_user();
        $data['informasi'] = $this->informasi_m->getInformasi('mbkm');

        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/informasi/index', $data);
        $this->load->view('temp_admin/footer');
    }

    public function pangkalan_data()
    {
        is_logged_out();
        $data['title'] = 'Pusat Pangkalan Data dan Sistem Informasi Mutu Akademik';
        $data['user'] = get_user();
        $data['informasi'] = $this->informasi_m->getInformasi('pangkalan_data');

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

        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/tokoh/index', $data);
        $this->load->view('temp_admin/footer');
    }

    public function tokoh_akreditasi()
    {
        is_logged_out();
        $data['title'] = 'Tokoh Pusat Pengelolaan Akreditasi';
        $data['user'] = get_user();
        $kategori = 'akreditasi';

        $config['base_url'] = 'http://localhost/ci3-test/tokoh_akreditasi';
        $config['total_rows'] = $this->tokoh_m->countByKategori($kategori);
        $config['per_page'] = 5;
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $data['tokoh'] = $this->tokoh_m->getTokohPage($config['per_page'], $data['start'], $kategori);
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/tokoh/index', $data);
        $this->load->view('temp_admin/footer');
    }

    public function tokoh_kompetensi()
    {
        is_logged_out();
        $data['title'] = 'Tokoh Pusat Pelatihan dan Pengembangan
        Kompetisi Sumber Daya Manusia';
        $data['user'] = get_user();
        $kategori = 'kompetensi';

        $config['base_url'] = 'http://localhost/ci3-test/tokoh_kompetensi';
        $config['total_rows'] = $this->tokoh_m->countByKategori($kategori);
        $config['per_page'] = 5;
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $data['tokoh'] = $this->tokoh_m->getTokohPage($config['per_page'], $data['start'], $kategori);
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/tokoh/index', $data);
        $this->load->view('temp_admin/footer');
    }

    public function tokoh_mbkm()
    {
        is_logged_out();
        $data['title'] = 'Tokoh Pusat Pengelolaan Merdeka Belajar Kampus Merdeka
        dan Kurikulum';
        $data['user'] = get_user();
        $kategori = 'mbkm';

        $config['base_url'] = 'http://localhost/ci3-test/tokoh_mbkm';
        $config['total_rows'] = $this->tokoh_m->countByKategori($kategori);
        $config['per_page'] = 5;
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $data['tokoh'] = $this->tokoh_m->getTokohPage($config['per_page'], $data['start'], $kategori);
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/tokoh/index', $data);
        $this->load->view('temp_admin/footer');
    }

    public function tokoh_pangkalan_data()
    {
        is_logged_out();
        $data['title'] = 'Tokoh Pusat Pengelolaan Merdeka Belajar Kampus Merdeka
        dan Kurikulum';
        $data['user'] = get_user();
        $kategori = 'pangkalan_data';

        $config['base_url'] = 'http://localhost/ci3-test/tokoh_mbkm';
        $config['total_rows'] = $this->tokoh_m->countByKategori($kategori);
        $config['per_page'] = 5;
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $data['tokoh'] = $this->tokoh_m->getTokohPage($config['per_page'], $data['start'], $kategori);
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
        $data['dokumen'] = $this->dok_sertifikat->getDokumen();
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
        $data['dokumen'] = $this->dok_lp3mp->getDokumen();
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
                    $data_logo = $this->upload->data();
                    $gambar_logo = $data_logo['file_name'];
                }
            }

            if ($_FILES['background_userfile']['size'] > 0) {
                if ($this->upload->do_upload('background_userfile')) {
                    $data_background = $this->upload->data();
                    $gambar_background = $data_background['file_name'];
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
