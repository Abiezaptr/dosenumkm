<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konsultasi_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function fetchConsultationData($category_id) {
        $this->db->select('*, services.id as id_service, services.images');
        $this->db->from('services');
        $this->db->join('categories', 'categories.id = services.category_id');
        $this->db->where('services.status', 1);
        $this->db->where('services.category_id', $category_id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getConsultationDetail($service_id) {
        $this->db->select('services.*, detail_services.title as detail_title, detail_services.price as detail_price, detail_services.status as detail_status, detail_services.type_id, detail_services.specialist_id, detail_services.image as detail_image, jasa_type.name as type_name, specialist_type.name as specialist_name');
        $this->db->from('services');
        $this->db->join('detail_services', 'detail_services.services_id = services.id');
        $this->db->join('jasa_type', 'jasa_type.id = detail_services.type_id');
        $this->db->join('specialist_type', 'specialist_type.id = detail_services.specialist_id');
        $this->db->where('services.id', $service_id);
        $query = $this->db->get();
        return $query->result_array(); 
    }
}
