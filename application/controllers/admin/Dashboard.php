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
        
        $category_id = $this->input->get('category_id');
        $status = $this->input->get('status');
        $date_from = $this->input->get('date_from');
        $date_to = $this->input->get('date_to');

        $category_id = ($category_id === 'all' || $category_id === false) ? null : explode(',', $category_id);
        $status = ($status === 'all' || $status === false) ? null : explode(',', $status);
        $data['rating_data'] = $this->Dashboard_model->get_data_by_rating($category_id, $status, $date_from, $date_to);

        $name = $this->input->get('name');
        $data['name'] = $name;

        $this->load->view('partials/admin/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('partials/admin/footer');
    }
}
