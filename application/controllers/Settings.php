<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Settings extends CI_Controller
{

    public function index()
    {
        $this->load->view('partials/landing/header');
        $this->load->view('settings/index');
        $this->load->view('partials/landing/footer');
    }

    public function contact()
    {
        $this->load->view('partials/landing/header');
        $this->load->view('settings/contact');
        $this->load->view('partials/landing/footer');
    }

    public function document()
    {
        $this->load->view('partials/landing/header');
        $this->load->view('settings/document');
        $this->load->view('partials/landing/footer');
    }
}
