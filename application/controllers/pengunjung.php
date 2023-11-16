<?php

class pengunjung extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('tokoh_m');
		$this->load->model('informasi_m');
		$this->load->model('konten_m');
		$this->load->model('pengaturan_website_model', 'wbs');
	}

	public function index()
	{
		$data['title'] = 'Beranda';
		$kategori = 'berita';
		$data['website'] = $this->wbs->getWebsite();
		$data['lembaga'] = $this->informasi_m->getInformasiLembaga();
		$data['konten'] = $this->konten_m->getKontenLimit(4, $kategori);

		$this->load->view('temp_pengunjung/header', $data);
		$this->load->view('pengunjung/index', $data);
		$this->load->view('temp_pengunjung/footer');
	}

	public function berita()
	{
		$data['title'] = 'Berita';
		$kategori = 'berita';

		$config['base_url'] = 'http://localhost/ci3-test/pengunjung/berita';
		$config['total_rows'] = $this->konten_m->countByKategori($kategori);
		$config['per_page'] = 10;
		$this->pagination->initialize($config);

		$data['konten_lain'] = $this->konten_m->getKontenLimit(5, 'berita');
		$data['website'] = $this->wbs->getWebsite();
		$data['start'] = $this->uri->segment(3);
		$data['konten'] = $this->konten_m->getKontenPage($config['per_page'], $data['start'], $kategori);
		$this->load->view('temp_pengunjung/header', $data);
		$this->load->view('pengunjung/konten/index', $data);
		$this->load->view('temp_pengunjung/footer');
	}

	public function pengumuman()
	{
		$data['title'] = 'Pengumuman';
		$kategori = 'pengumuman';

		$config['base_url'] = 'http://localhost/ci3-test/pengunjung/pengumuman';
		$config['total_rows'] = $this->konten_m->countByKategori($kategori);
		$config['per_page'] = 10;
		$this->pagination->initialize($config);

		$data['website'] = $this->wbs->getWebsite();
		$data['konten_lain'] = $this->konten_m->getKontenLimit(5, 'berita');
		$data['start'] = $this->uri->segment(3);
		$data['konten'] = $this->konten_m->getKontenPage($config['per_page'], $data['start'], $kategori);
		$this->load->view('temp_pengunjung/header', $data);
		$this->load->view('pengunjung/konten/index', $data);
		$this->load->view('temp_pengunjung/footer');
	}

	public function pelatihan()
	{
		$data['title'] = 'Pelatihan Dosen';
		$kategori = 'pelatihan';

		$config['base_url'] = 'http://localhost/ci3-test/pengunjung/pelatihan';
		$config['total_rows'] = $this->konten_m->countByKategori($kategori);
		$config['per_page'] = 10;
		$this->pagination->initialize($config);

		$data['website'] = $this->wbs->getWebsite();
		$data['konten_lain'] = $this->konten_m->getKontenLimit(5, 'berita');
		$data['start'] = $this->uri->segment(3);
		$data['konten'] = $this->konten_m->getKontenPage($config['per_page'], $data['start'], $kategori);
		$this->load->view('temp_pengunjung/header', $data);
		$this->load->view('pengunjung/konten/index', $data);
		$this->load->view('temp_pengunjung/footer');
	}

	public function benchmarking()
	{
		$data['title'] = 'Benchmarking';
		$kategori = 'benchmarking';

		$config['base_url'] = 'http://localhost/ci3-test/pengunjung/benchmarking';
		$config['total_rows'] = $this->konten_m->countByKategori($kategori);
		$config['per_page'] = 10;
		$this->pagination->initialize($config);

		$data['website'] = $this->wbs->getWebsite();
		$data['konten_lain'] = $this->konten_m->getKontenLimit(5, 'berita');
		$data['start'] = $this->uri->segment(3);
		$data['konten'] = $this->konten_m->getKontenPage($config['per_page'], $data['start'], $kategori);
		$this->load->view('temp_pengunjung/header', $data);
		$this->load->view('pengunjung/konten/index', $data);
		$this->load->view('temp_pengunjung/footer');
	}

	public function ami()
	{
		$data['title'] = 'AMI';
		$kategori = 'ami';

		$config['base_url'] = 'http://localhost/ci3-test/pengunjung/ami';
		$config['total_rows'] = $this->konten_m->countByKategori($kategori);
		$config['per_page'] = 10;
		$this->pagination->initialize($config);

		$data['website'] = $this->wbs->getWebsite();
		$data['konten_lain'] = $this->konten_m->getKontenLimit(5, 'berita');
		$data['start'] = $this->uri->segment(3);
		$data['konten'] = $this->konten_m->getKontenPage($config['per_page'], $data['start'], $kategori);
		$this->load->view('temp_pengunjung/header', $data);
		$this->load->view('pengunjung/konten/index', $data);
		$this->load->view('temp_pengunjung/footer');
	}

	public function sejarah()
	{
		$data['title'] = 'Sejarah';
		$data['informasi'] = $this->informasi_m->getInformasi('sejarah');
		$data['website'] = $this->wbs->getWebsite();
		$this->load->view('temp_pengunjung/header', $data);
		$this->load->view('pengunjung/sejarah', $data);
		$this->load->view('temp_pengunjung/footer');
	}

	public function visi_misi()
	{
		$data['title'] = 'Visi dan Misi';
		$data['visi'] = $this->informasi_m->getInformasi('visi');
		$data['misi'] = $this->informasi_m->getInformasi('misi');
		$data['tujuan'] = $this->informasi_m->getInformasi('tujuan');
		$data['website'] = $this->wbs->getWebsite();
		$this->load->view('temp_pengunjung/header', $data);
		$this->load->view('pengunjung/visi_misi', $data);
		$this->load->view('temp_pengunjung/footer');
	}

	public function pengelola()
	{
		$data['title'] = 'Struktur Organisasi';
		$kategori = 'pengelola';

		$config['base_url'] = 'http://localhost/ci3-test/pengunjung/pengelola';
		$config['total_rows'] = $this->tokoh_m->countByKategori($kategori);
		$config['per_page'] = 10;
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);

		$data['website'] = $this->wbs->getWebsite();
		$data['tokoh'] = $this->tokoh_m->getTokohPage($config['per_page'], $data['start'], $kategori);
		$data['informasi'] = $this->informasi_m->getInformasi('pengelola');
		$this->load->view('temp_pengunjung/header', $data);
		$this->load->view('pengunjung/pengelola', $data);
		$this->load->view('temp_pengunjung/footer');
	}

	public function pusat_studi()
	{
		$data['title'] = 'Pusat Manajemen Mutu';
		$kategori = 'pusat_studi';

		$config['base_url'] = 'http://localhost/ci3-test/pengunjung/pusat_studi';
		$config['total_rows'] = $this->tokoh_m->countByKategori($kategori);
		$config['per_page'] = 10;
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);

		$data['website'] = $this->wbs->getWebsite();
		$data['tokoh'] = $this->tokoh_m->getTokohPage($config['per_page'], $data['start'], $kategori);
		$data['informasi'] = $this->informasi_m->getInformasi($kategori);
		$this->load->view('temp_pengunjung/header', $data);
		$this->load->view('pengunjung/pengelola', $data);
		$this->load->view('temp_pengunjung/footer');
	}

	public function akreditasi()
	{
		$data['title'] = 'Pusat Pengelolaan Akreditasi';
		$kategori = 'akreditasi';

		$config['base_url'] = 'http://localhost/ci3-test/pengunjung/akreditasi';
		$config['total_rows'] = $this->tokoh_m->countByKategori($kategori);
		$config['per_page'] = 10;
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);

		$data['website'] = $this->wbs->getWebsite();
		$data['tokoh'] = $this->tokoh_m->getTokohPage($config['per_page'], $data['start'], $kategori);
		$data['informasi'] = $this->informasi_m->getInformasi($kategori);
		$this->load->view('temp_pengunjung/header', $data);
		$this->load->view('pengunjung/pengelola', $data);
		$this->load->view('temp_pengunjung/footer');
	}

	public function kompetensi()
	{
		$data['title'] = 'Pusat Pelatihan dan Pengembangan
        Kompetisi Sumber Daya Manusia';
		$kategori = 'kompetensi';

		$config['base_url'] = 'http://localhost/ci3-test/pengunjung/kompetensi';
		$config['total_rows'] = $this->tokoh_m->countByKategori($kategori);
		$config['per_page'] = 10;
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);

		$data['website'] = $this->wbs->getWebsite();
		$data['tokoh'] = $this->tokoh_m->getTokohPage($config['per_page'], $data['start'], $kategori);
		$data['informasi'] = $this->informasi_m->getInformasi($kategori);
		$this->load->view('temp_pengunjung/header', $data);
		$this->load->view('pengunjung/pengelola', $data);
		$this->load->view('temp_pengunjung/footer');
	}

	public function mbkm()
	{
		$data['title'] = 'Pusat Pengelolaan Merdeka Belajar Kampus Merdeka
        dan Kurikulum';
		$kategori = 'mbkm';

		$config['base_url'] = 'http://localhost/ci3-test/pengunjung/mbkm';
		$config['total_rows'] = $this->tokoh_m->countByKategori($kategori);
		$config['per_page'] = 10;
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);

		$data['website'] = $this->wbs->getWebsite();
		$data['tokoh'] = $this->tokoh_m->getTokohPage($config['per_page'], $data['start'], $kategori);
		$data['informasi'] = $this->informasi_m->getInformasi($kategori);
		$this->load->view('temp_pengunjung/header', $data);
		$this->load->view('pengunjung/pengelola', $data);
		$this->load->view('temp_pengunjung/footer');
	}

	public function pangkalan_data()
	{
		$data['title'] = 'Pusat Pengelolaan Merdeka Belajar Kampus Merdeka
        dan Kurikulum';
		$kategori = 'pangkalan_data';

		$config['base_url'] = 'http://localhost/ci3-test/pengunjung/pangkalan_data';
		$config['total_rows'] = $this->tokoh_m->countByKategori($kategori);
		$config['per_page'] = 10;
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);

		$data['website'] = $this->wbs->getWebsite();
		$data['tokoh'] = $this->tokoh_m->getTokohPage($config['per_page'], $data['start'], $kategori);
		$data['informasi'] = $this->informasi_m->getInformasi($kategori);
		$this->load->view('temp_pengunjung/header', $data);
		$this->load->view('pengunjung/pengelola', $data);
		$this->load->view('temp_pengunjung/footer');
	}

	public function dokumen()
	{
		$this->load->model('dok_lp3mp_model', 'dkm');
		$data['title'] = 'Dokumen';

		$data['website'] = $this->wbs->getWebsite();
		$data['dokumen'] = $this->dkm->getDokumen();
		$this->load->view('temp_pengunjung/header', $data);
		$this->load->view('pengunjung/dokumen', $data);
		$this->load->view('temp_pengunjung/footer');
	}

	public function akreditas()
	{
		$this->load->model('dok_sertifikat_model', 'dok_sertifikat');
		$data['title'] = 'Sertifikat Akreditasi';
		$data['website'] = $this->wbs->getWebsite();
		$data['dokumen'] = $this->dok_sertifikat->getDokumen();
		$this->load->view('temp_pengunjung/header', $data);
		$this->load->view('pengunjung/akreditas', $data);
		$this->load->view('temp_pengunjung/footer');
	}
}
