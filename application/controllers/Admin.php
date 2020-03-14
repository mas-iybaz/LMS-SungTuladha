<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    /**
     * Public Method
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model', 'admin');
    }

    public function index()
    {
        $data['user'] = $this->admin->get_userdata();
        $data['total_postingan'] = $this->db->count_all_results('posts');
        $data['total_instruktur'] = $this->db->count_all_results('instructors');
        $data['total_anggota'] = $this->db->count_all_results('users');
        $data['total_kelas'] = $this->db->count_all_results('classes');

        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidenav', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/templates/footer');
    }

    public function biodata()
    {
        echo ('ini biodata');
    }
}
