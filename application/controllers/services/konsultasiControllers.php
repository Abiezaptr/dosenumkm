<?php
class konsultasiControllers extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session'); 
        $this->load->model('service_model');
        $this->load->model('category_model');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['title'] = 'DOSEN UMKM | Manage Consulty';
        $data['services'] = $this->service_model->get_services();
        $this->load->view('partials/admin/header', $data);
        $this->load->view('admin/consulty/index', $data);
        $this->load->view('partials/admin/footer');
    }

     public function create() {
        $data['title'] = 'DOSEN UMKM | Create Consulty';
        $this->load->view('partials/admin/header', $data);
        $this->load->view('admin/consulty/create', $data);
        $this->load->view('partials/admin/footer');
    }

    public function createProcess() {
        $data['categories'] = $this->category_model->get_categories();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required|numeric');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('services/create', $data);
            $this->load->view('templates/footer');
        } else {
            $service_data = array(
                'category_id' => $this->input->post('category_id'),
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'price' => $this->input->post('price'),
                'rating' => $this->input->post('rating'),
                'reviews' => $this->input->post('reviews')
            );
            $this->service_model->set_service($service_data);
            redirect('services');
        }
    }

    public function edit($id) {
        $data['service'] = $this->service_model->get_services($id);
        $data['categories'] = $this->category_model->get_categories();

        if (empty($data['service'])) {
            show_404();
        }

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required|numeric');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('services/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $service_data = array(
                'category_id' => $this->input->post('category_id'),
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'price' => $this->input->post('price'),
                'rating' => $this->input->post('rating'),
                'reviews' => $this->input->post('reviews')
            );
            $this->service_model->update_service($id, $service_data);
            redirect('services');
        }
    }

    public function delete($id) {
        $this->service_model->delete_service($id);
        redirect('services');
    }
}