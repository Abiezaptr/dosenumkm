<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Message extends CI_Controller
{

    public function index()
    {
        $this->load->view('partials/other/header');
        $this->load->view('chat/message');
        $this->load->view('partials/other/footer');
    }
}
