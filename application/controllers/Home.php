<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function index() {
        $nama_from_session = $this->session->userdata('nama');
        
        // Load view
        $data['nama'] = $nama_from_session; 
        $this->load->view('partials/home/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('partials/home/footer');
    }
}
