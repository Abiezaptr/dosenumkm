<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Edukasi extends CI_Controller
{

    public function index()
    {
        $this->load->view('partials/landing/header');
        $this->load->view('edukasi/index');
        $this->load->view('partials/landing/footer');
    }

    public function courses()
    {
        $this->load->view('partials/landing/header');
        $this->load->view('edukasi/view');
        $this->load->view('partials/landing/footer');
    }

    public function course_detail()
    {
        $this->load->view('partials/landing/header');
        $this->load->view('edukasi/detail');
        $this->load->view('partials/landing/footer');
    }
}
