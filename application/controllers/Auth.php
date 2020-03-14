<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    /**
     * Public Method
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function login()
    {
        was_login();
        if (!$this->form_validation->run()) {
            $this->load->view('auth/login');
        } else {
            $this->_loginProcess();
        }
    }

    public function register()
    {
        was_login();
        if (!$this->form_validation->run()) {
            $this->load->view('auth/register');
        } else {
            $this->_registerProcess();
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect();
    }

    /**
     * Private Method
     */
    private function _loginProcess()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('users', ['email' => $email])->row_array();

        if (!$user) {
            $this->session->set_flashdata('error_message', 'Email tidak tersedia');
            redirect('login');
        } else {
            if (!password_verify($password, $user['password'])) {
                $this->session->set_flashdata('error_message', 'Password salah');
                redirect('login');
            } else {
                $this->session->set_userdata($user);
                redirect($this->session->userdata('role'));
            }
        }
    }

    private function _registerProcess()
    {
        $data = [
            'fullname' => $this->input->post('fullname', true),
            'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
            'email' => $this->input->post('email', true),
            'role' => 'user',
            'status' => 'active',
            'created_at' => date('Y-m-d H:i:s')
        ];

        if (!$this->db->insert('users', $data)) {
            $this->session->set_flashdata('error_message', 'Gagal melakukan registrasi');
            redirect('register');
        } else {
            $this->session->set_flashdata('success_message', 'User berhasil ditambahkan');
            redirect('login');
        }
    }
}
