<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->library('session'); 
        $this->load->model('Dashboard_model'); 
    }

    public function index()
    {
        $data['title'] = 'DOSEN UMKM | Dashboard';
        $data['rating_data'] = $this->Dashboard_model->get_data_by_rating();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('partials/admin/footer');
    }
}
