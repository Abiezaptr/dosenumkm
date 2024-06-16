<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agency extends CI_Controller
{

    public function index()
    {
        $this->load->view('partials/landing/header');
        $this->load->view('agency/index');
        $this->load->view('partials/landing/footer');
    }

    public function support()
    {
        $this->load->view('partials/landing/header');
        $this->load->view('agency/support');
        $this->load->view('partials/landing/footer');
    }
}
