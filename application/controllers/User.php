<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    /**
     * Public Method
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['username'] = 'Kana Suzuki';

        $this->load->view('homepage');
    }
}
