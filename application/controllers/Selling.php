<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Selling extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Konsultasi_model');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('partials/landing/header');
        $this->load->view('sell/index');
        $this->load->view('partials/landing/footer');
    }

    public function apply()
    {
        $this->load->view('sell/apply');
    }
}
