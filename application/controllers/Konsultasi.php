<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konsultasi extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->model('Konsultasi_model');
        $this->load->library('session'); 
    }

    public function index() {
        $category_id = 1;
        $data['konsultasi'] = $this->Konsultasi_model->fetchConsultationData($category_id);
        $this->load->view('partials/landing/header', $data);
        $this->load->view('consul/konsultasi', $data);
        $this->load->view('partials/landing/footer');
    }

    public function detail($service_id) {
        $data['service_details'] = $this->Konsultasi_model->getConsultationDetail($service_id);
        $this->load->view('partials/other/header', $data);
        $this->load->view('consul/detail_konsultasi', $data);
        $this->load->view('partials/other/footer');
    }

    public function view($service_id)
    {
        $data['service_details'] = $this->Konsultasi_model->getConsultationDetailView($service_id);

        $this->load->view('partials/other/header');
        $this->load->view('consul/view_konsultasi', $data); 
        $this->load->view('partials/other/footer');
    }

    public function chat()
    {
        $this->load->view('partials/other/header');
        $this->load->view('chat/index');
        $this->load->view('partials/other/footer');
    }
}
