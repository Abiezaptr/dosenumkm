<?php
class servicesControllers extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session'); 
        $this->load->model('service_model');
        $this->load->model('category_model');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['title'] = 'Dosen UMKM | Manage Services';
        $data['services'] = $this->service_model->get_services();
        $this->load->view('partials/admin/header', $data);
        $this->load->view('admin/services/index', $data);
        $this->load->view('partials/admin/footer');
    }

     public function create() {
        $data['title'] = 'Dosen UMKM | Create Services';
        $data['categories'] = $this->service_model->get_categories();
        $data['types'] = $this->service_model->get_type();
        $data['specialist'] = $this->service_model->get_specialist();
        $this->load->view('partials/admin/header', $data);
        $this->load->view('admin/services/create', $data);
        $this->load->view('partials/admin/footer');
    }

    public function store() {
        $config['upload_path'] = './assets/uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 2048; 
        $config['encrypt_name'] = TRUE; 
        
        $this->load->library('upload', $config);
        $this->db->trans_start(); 
    
        try {
            if ($this->upload->do_upload('images')) {
                $upload_data = $this->upload->data();
                $image_path = 'assets/uploads/' . $upload_data['file_name'];
    
                $service_data = array(
                    'category_id' => $this->input->post('category_id'),
                    'title' => $this->input->post('title'),
                    'description' => $this->input->post('description'),
                    'rating' => $this->input->post('rating'),
                    'reviews' => $this->input->post('reviews'),
                    'images' => $image_path 
                );
    
                $this->service_model->set_service($service_data);
                
                $service_id = $this->db->insert_id(); 
    
                // Upload detail image if exists
                $detail_image_path = null;
                if ($_FILES['detail_image']['name']) {  
                    if ($this->upload->do_upload('detail_image')) {
                        $detail_upload_data = $this->upload->data();
                        $detail_image_path = 'assets/uploads/' . $detail_upload_data['file_name'];
                    } else {
                        throw new Exception($this->upload->display_errors());
                    }
                }
    
                $detail_data = array(
                    'services_id'   => $service_id, 
                    'title'         => $this->input->post('detail_title'),
                    'price'         => $this->input->post('detail_price'),
                    'status'        => $this->input->post('detail_status'),
                    'type_id'       => $this->input->post('detail_type'),
                    'specialist_id' => $this->input->post('detail_specialist'),
                    'image'         => $detail_image_path
                );

                $this->service_model->set_detail_service($detail_data);
    
                if ($this->db->trans_status() === FALSE) {
                    throw new Exception('There was an error saving the service details.');
                }
    
                $this->db->trans_commit(); 
                $this->session->set_flashdata('success', 'Service and details saved successfully.');
                redirect('services/servicesControllers');
            } else {
                throw new Exception($this->upload->display_errors());
            }
        } catch (Exception $e) {
            $this->db->trans_rollback(); 
            $this->session->set_flashdata('error', $e->getMessage());
            redirect('services/servicesControllers/create');
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

    public function detail($id) {
        $data['title'] = 'Dosen UMKM | Detail Services';
        $data['service'] = $this->service_model->get_service_by_id($id);
        $data['services'] = $this->service_model->get_services_by_service_id($id);
        
        $this->load->view('partials/admin/header', $data);
        $this->load->view('admin/services/detail', $data);
        $this->load->view('partials/admin/footer');
    }      

    public function delete($id) {
        $this->service_model->delete_service($id);
        redirect('services');
    }
}