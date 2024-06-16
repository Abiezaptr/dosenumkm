<?php
class Dashboard_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database(); 
    }

    public function get_data_by_rating()
    {
        $this->db->select('rating, title');
        $this->db->from('services');
        $this->db->group_by('rating');
        $this->db->order_by('rating', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }
}