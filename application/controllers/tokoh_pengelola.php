<?php

class tokoh_pengelola extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('tokoh_pengelola_model', 'tokoh');
        $this->load->library('form_validation');
    }

    public function index()
    {
        is_logged_out();
        $data['tittle'] = 'Tokoh Pengelola';
        $data['user'] = get_user();
        $config['base_url'] = 'http://localhost/ci3-test/tokoh_pengelola/index';
        $config['num_links'] = 5;

        $config['total_rows'] = $this->tokoh->countAllTokoh();
        $config['per_page'] = 2;

        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['tokoh'] = $this->tokoh->gettokohPage($config['per_page'], $data['start']);
        if ($this->input->post('keyword')) {
            $data['tokoh'] = $this->tokoh->caritokoh();
        }
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar', $data);
        $this->load->view('admin/tokoh_pengelola/index', $data);
        $this->load->view('template_admin/footer');
    }
}
