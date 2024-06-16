<?php
class Dashboard_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database(); 
    }

    public function get_data_by_rating($category_id = null, $status = null, $date_from = null, $date_to = null)
    {
        $this->db->select('rating, title');
        $this->db->from('services');
        if (!empty($category_id)) {
            $this->db->where_in('category_id', $category_id);
        }
        if (!empty($status)) {
            $this->db->where_in('status', $status);
        }
        if (!empty($date_from)) {
            $this->db->where('created_at >=', $date_from);
        }
        if (!empty($date_to)) {
            $this->db->where('created_at <=', $date_to);
        }
        $this->db->group_by('rating');
        $this->db->order_by('rating', 'ASC');
        $query = $this->db->get();
        // echo $this->db->last_query(); 
        // die(); 
        return $query->result_array();
    }
}