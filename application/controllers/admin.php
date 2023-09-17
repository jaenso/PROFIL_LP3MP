<?php

class admin extends CI_Controller {
    public function index()
	{
		$data['tittle'] = 'Dashboard';
		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar', $data);
		$this->load->view('admin/dashboard');
		$this->load->view('template_admin/footer');
	}
}