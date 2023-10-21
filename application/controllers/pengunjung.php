<?php

class pengunjung extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_out();
	}

	public function index()
	{
		$this->load->model('berita_model', 'berita');
		$data['title'] = 'Beranda';

		$config['base_url'] = 'http://localhost/ci3-test/pengunjung/index';
		$config['total_rows'] = $this->berita->countAllBerita();
		$config['per_page'] = 4;
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['konten'] = $this->berita->getBeritaPage($config['per_page'], $data['start']);

		$this->load->model('konten_model', 'konten');
		$data['konten_lain'] = $this->konten->getKonten(5);

		$this->load->view('temp_pengunjung/header', $data);
		$this->load->view('pengunjung/index', $data);
		$this->load->view('temp_pengunjung/footer');
	}

	public function berita()
	{
		$this->load->model('berita_model', 'berita');
		$data['title'] = 'Berita';

		$config['base_url'] = 'http://localhost/ci3-test/pengunjung/berita';
		$config['total_rows'] = $this->berita->countAllBerita();
		$config['per_page'] = 10;
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['konten'] = $this->berita->getBeritaPage($config['per_page'], $data['start']);
		$this->load->view('temp_pengunjung/header', $data);
		$this->load->view('pengunjung/berita/berita', $data);
		$this->load->view('temp_pengunjung/footer');
	}

	public function pengumuman()
	{
		$this->load->model('pengumuman_model', 'pengumuman');
		$data['title'] = 'Pengumuman';

		$config['base_url'] = 'http://localhost/ci3-test/pengunjung/pengumuman';
		$config['total_rows'] = $this->pengumuman->countAllPengumuman();
		$config['per_page'] = 10;
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['konten'] = $this->pengumuman->getPengumumanPage($config['per_page'], $data['start']);
		$this->load->view('temp_pengunjung/header', $data);
		$this->load->view('pengunjung/pengumuman/pengumuman', $data);
		$this->load->view('temp_pengunjung/footer');
	}

	public function pelatihan()
	{
		$this->load->model('pelatihan_model', 'pelatihan');
		$data['title'] = 'Pelatihan Dosen';

		$config['base_url'] = 'http://localhost/ci3-test/pengunjung/pelatihan';
		$config['total_rows'] = $this->pelatihan->countAllPelatihan();
		$config['per_page'] = 10;
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['konten'] = $this->pelatihan->getPelatihanPage($config['per_page'], $data['start']);
		$this->load->view('temp_pengunjung/header', $data);
		$this->load->view('pengunjung/pelatihan/pelatihan', $data);
		$this->load->view('temp_pengunjung/footer');
	}

	public function benchmarking()
	{
		$this->load->model('benchmarking_model', 'benchmarking');
		$data['title'] = 'Benchmarking';

		$config['base_url'] = 'http://localhost/ci3-test/pengunjung/benchmarking';
		$config['total_rows'] = $this->benchmarking->countAllBenchmarking();
		$config['per_page'] = 10;
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['konten'] = $this->benchmarking->getBenchmarkingPage($config['per_page'], $data['start']);
		$this->load->view('temp_pengunjung/header', $data);
		$this->load->view('pengunjung/benchmarking/benchmarking', $data);
		$this->load->view('temp_pengunjung/footer');
	}

	public function sejarah()
	{
		$this->load->model('sejarah_model', 'sejarah');
		$data['title'] = 'Sejarah';
		$data['informasi'] = $this->sejarah->getSejarah();
		$this->load->view('temp_pengunjung/header', $data);
		$this->load->view('pengunjung/sejarah', $data);
		$this->load->view('temp_pengunjung/footer');
	}

	public function visi_misi()
	{
		$this->load->model('visi_misi_model', 'visi_misi');
		$data['title'] = 'Visi dan Misi';
		$data['visi'] = $this->visi_misi->getVisi();
		$data['misi'] = $this->visi_misi->getMisi();
		$data['tujuan'] = $this->visi_misi->getTujuan();
		$this->load->view('temp_pengunjung/header', $data);
		$this->load->view('pengunjung/visi_misi', $data);
		$this->load->view('temp_pengunjung/footer');
	}

	public function pengelola()
	{
		$this->load->model('pengelola_model', 'pengelola');
		$data['title'] = 'Struktur Organisasi';
		$data['informasi'] = $this->pengelola->getpengelola();
		$this->load->view('temp_pengunjung/header', $data);
		$this->load->view('pengunjung/pengelola', $data);
		$this->load->view('temp_pengunjung/footer');
	}

	public function pusat_studi()
	{
		$this->load->model('pusat_studi_model', 'pusat_studi');
		$data['title'] = 'Pusat Studi';
		$data['informasi'] = $this->pusat_studi->getPusat_Studi();
		$this->load->view('temp_pengunjung/header', $data);
		$this->load->view('pengunjung/pusat_studi', $data);
		$this->load->view('temp_pengunjung/footer');
	}

	public function dokumen()
	{
		$this->load->model('dok_lp3mp_model', 'dkm');
		$data['title'] = 'Dokumen';

		$config['base_url'] = 'http://localhost/ci3-test/pengunjung/dokumen';
		$config['total_rows'] = $this->dkm->countAllDokumen();
		$config['per_page'] = 10;
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['dokumen'] = $this->dkm->getDokumenPage($config['per_page'], $data['start']);
		$this->load->view('temp_pengunjung/header', $data);
		$this->load->view('pengunjung/dokumen', $data);
		$this->load->view('temp_pengunjung/footer');
	}

	public function filter()
	{
		$fakultas = $this->input->post('fakultas');
		$data['title'] = 'Sertifikat Akreditasi';

		$this->load->model('dok_sertifikat_model', 'dok_sertifikat');
		$data['dokumen'] = $this->dok_sertifikat->filterByProgramStudi($fakultas);
		$config['base_url'] = 'http://localhost/ci3-test/pengunjung/akreditas';
		$config['total_rows'] = $this->dok_sertifikat->countAllDokumen();
		$config['per_page'] = 15;
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);

		$this->load->view('temp_pengunjung/header', $data);
		$this->load->view('pengunjung/akreditas', $data);
		$this->load->view('temp_pengunjung/footer');
	}


	public function akreditas()
	{
		$this->load->model('dok_sertifikat_model', 'dok_sertifikat');
		$data['title'] = 'Sertifikat Akreditasi';

		$config['base_url'] = 'http://localhost/ci3-test/pengunjung/akreditas';
		$config['total_rows'] = $this->dok_sertifikat->countAllDokumen();
		$config['per_page'] = 15;
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['dokumen'] = $this->dok_sertifikat->getDokumenPage($config['per_page'], $data['start']);
		$this->load->view('temp_pengunjung/header', $data);
		$this->load->view('pengunjung/akreditas', $data);
		$this->load->view('temp_pengunjung/footer');
	}
}
