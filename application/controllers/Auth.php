<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('Auth_model', 'M_Sport_Type'));
        $this->load->library('form_validation');
    }

    public function login() {
        if (!empty($this->session->userdata('id')) && !empty($this->session->userdata('role'))) {
            if (in_array($this->session->userdata('role'), ['admin', 'editor'])) {
                redirect('admin/dashboard');
            } else {
                redirect('/');
            }
        }

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email', array(
            'required' => '*Email tidak boleh kosong',
            'valid_email' => '*Format email tidak valid'
        ));
        $this->form_validation->set_rules('password', 'Password', 'required', array(
            'required' => '*Password tidak boleh kosong'
        ));

        if ($this->form_validation->run() === TRUE) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->Auth_model->check_login($email);

            if ($user) {
                if (password_verify($password, $user->password) || $password === $user->password) {
                    $session_data = [
                        'id' => $user->id,
                        'username' => $user->username,
                        'role' => $user->role
                    ];
                    $this->session->set_userdata($session_data);
                    
                    if (in_array($user->role, ['admin', 'editor'])) {
                        redirect('admin/dashboard');
                    } else {
                        redirect('/');
                    }
                } else {
                    $this->session->set_flashdata('failed', 'Password salah !');
                }
            } else {
                $this->session->set_flashdata('failed', 'Email tidak terdaftar !');
            }
        }

        $sport_types = $this->M_Sport_Type->get();
        $context = [
            'data_sportType' => $sport_types
        ];
        $this->template->user_template('Auth/user_login', $context);
    }

    public function register() {
        if (!empty($this->session->userdata('id')) && !empty($this->session->userdata('role'))) {
            redirect('/');
        }

        $this->form_validation->set_rules('fullname', 'Nama Lengkap', 'required', array('required' => '*Nama lengkap tidak boleh kosong'));
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]', array(
            'required' => '*Username tidak boleh kosong',
            'is_unique' => '*Username sudah terpakai'
        ));
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]', array(
            'required' => '*Email tidak boleh kosong',
            'valid_email' => '*Format email tidak valid',
            'is_unique' => '*Email sudah terdaftar'
        ));
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]', array(
            'required' => '*Password tidak boleh kosong',
            'min_length' => '*Password minimal 5 karakter'
        ));
        $this->form_validation->set_rules('gender', 'Gender', 'required|in_list[male,female]', array(
            'required' => '*Gender harus dipilih',
            'in_list' => '*Gender tidak valid'
        ));

        if ($this->form_validation->run() === TRUE) {
            $data = [
                'fullname' => $this->input->post('fullname'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'gender' => $this->input->post('gender'),
                'role' => 'user',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];

            $this->Auth_model->register_user($data);
            $this->session->set_flashdata('success', 'Registrasi berhasil, silakan login !');
            redirect('login');
        }

        $sport_types = $this->M_Sport_Type->get();
        $context = [
            'data_sportType' => $sport_types
        ];
        $this->template->user_template('Auth/user_register', $context);
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('/');
    }
}
