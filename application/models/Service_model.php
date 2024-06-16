<?php
class Service_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function get_services($id = FALSE) {
        $this->db->select('services.*, categories.name as category_name');
        $this->db->from('services');
        $this->db->join('categories', 'categories.id = services.category_id', 'left');

        if ($id !== FALSE) {
            $this->db->where('services.id', $id);
            $query = $this->db->get();
            return $query->row_array();
        }

        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_jasaType($id = FALSE) {
        $this->db->select('*');
        $this->db->from('jasa_type');

        if ($id !== FALSE) {
            $this->db->where('jasa_type.id', $id);
            $query = $this->db->get();
            return $query->row_array();
        }

        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_categories() {
        $query = $this->db->get('categories');
        return $query->result_array();
    }
    
    public function get_type() {
        $query = $this->db->get('jasa_type');
        return $query->result_array();
    }

    public function get_specialist() {
        $query = $this->db->get('specialist_type');
        return $query->result_array();
    }

    public function set_service($data) {
        return $this->db->insert('services', $data);
    }

    public function set_detail_service($data) {
        $this->db->insert('detail_services', $data);
    }    

    public function update_service($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('services', $data);
    }

    public function delete_service($id) {
        $this->db->where('id', $id);
        return $this->db->delete('services');
    }

    public function get_service_by_id($id) {
        $this->db->select('services.*, categories.name as category_name');
        $this->db->from('services');
        $this->db->join('categories', 'categories.id = services.category_id', 'left');
        $this->db->where('services.id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }  
    
    public function get_services_by_service_id($service_id) {
        $this->db->select('id, title');
        $this->db->from('services');
        $this->db->where('id', $service_id);
        $query = $this->db->get();
        return $query->result_array();
    }    
}