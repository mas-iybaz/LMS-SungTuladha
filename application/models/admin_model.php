<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Model extends CI_Model
{
    /**
     * Public Method
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function get_userdata()
    {
        return $this->db->get('users', ['id' => $this->session->id])->row_array();
    }
}
