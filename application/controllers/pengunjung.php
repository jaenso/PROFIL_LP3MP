<?php

class pengunjung extends CI_Controller {
	public function index()
	{
		$this->load->view('template_pengunjung/header');
		$this->load->view('pengunjung/index');
		$this->load->view('template_pengunjung/footer');
	}

	public function sejarah()
	{

		$this->load->view('template_pengunjung/header');
		$this->load->view('pengunjung/sejarah');
		$this->load->view('template_pengunjung/footer');
	}

	public function visi_misi()
	{

		$this->load->view('template_pengunjung/header');
		$this->load->view('pengunjung/visi_misi');
		$this->load->view('template_pengunjung/footer');
	}
	
	public function pengelola()
	{
		
		$this->load->view('template_pengunjung/header');
		$this->load->view('pengunjung/pengelola');
		$this->load->view('template_pengunjung/footer');
	}

	public function pusat_studi()
	{

		$this->load->view('template_pengunjung/header');
		$this->load->view('pengunjung/pusat_studi');
		$this->load->view('template_pengunjung/footer');
	}

	public function peraturan_panduan()
	{

		$this->load->view('template_pengunjung/header');
		$this->load->view('pengunjung/peraturan_panduan');
		$this->load->view('template_pengunjung/footer');
	}

	public function konten_berita()
	{

		$this->load->view('template_pengunjung/header');
		$this->load->view('pengunjung/konten_berita');
		$this->load->view('template_pengunjung/footer');
	}

}
