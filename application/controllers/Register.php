<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model'); 
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('register');
    }

    public function create()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', 'All fields are required.');
            $this->load->view('register');
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password'))
            );

            if ($this->Admin_model->register_admin($data)) {
                $this->session->set_flashdata('successRegister', 'Registration successful.');
                redirect('login');
            } else {
                $this->session->set_flashdata('error', 'Registration failed.');
                redirect('register');
            }
        }
    }
}