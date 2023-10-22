<?php

class akun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('akun_model', 'akun');
        $this->load->library('form_validation');
    }

    public function index()
    {
        is_logged_in();
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['tittle'] = 'Login Akun';
            $this->load->view('temp_admin/header', $data);
            $this->load->view('admin/akun/login');
            $this->load->view('temp_admin/footer');
        } else {
            $this->login();
        }
    }

    function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'id_role' => $user['id_role']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['id_role'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('pengunjung');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password yang dimasukkan tidak sesuai</div>');
                    redirect('akun');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun sudah lama tidak aktif. Silahkan buat akun</div>');
                redirect('akun');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun tidak pernah terdaftar</div>');
            redirect('akun');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('id_role');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda berhasil keluar</div>');
        redirect('akun');
    }

    public function registrasi()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', ['matches' => 'Password tidak sama!', 'min_length' => 'Password terlalu pendek']);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password2]');

        if ($this->form_validation->run() == false) {
            $data['tittle'] = 'Registrasi Akun';
            $this->load->view('temp_admin/header', $data);
            $this->load->view('admin/akun/registrasi');
            $this->load->view('temp_admin/footer');
        } else {
            $tambah_data = array(
                "nama" => htmlspecialchars($this->input->post('nama', true)),
                "username" => htmlspecialchars($this->input->post('username', true)),
                "password" => password_hash($this->input->post('password1', true), PASSWORD_DEFAULT),
                'id_role' => 2,
                'image' => 'default.jpg',
                'date_created' => time()
            );

            $this->akun->tambahAkun($tambah_data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun anda berhasil dibuat. Silahkan login</div>');
            redirect('akun');
        }
    }
}
