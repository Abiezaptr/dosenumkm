<?php
class Admin_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function login($email, $password) {
        $this->db->where('email', $email);
        $query = $this->db->get('admins');
        $admin = $query->row_array();

        if ($admin && $admin['password'] === $password) {
            return $admin;
        } else {
            return false;
        }
    }

    public function get_admin_by_email($email) {
        $query = $this->db->get_where('admins', array('email' => $email));
        return $query->row_array();
    }

    public function insert_admin($data) {
        return $this->db->insert('admins', $data);
    }

    public function register_admin($data) {
        $result = $this->db->insert('admins', $data);
        if (!$result) {
            log_message('error', 'Failed to register admin. Error: ' . print_r($this->db->error(), true));
        }
        return $result;
    }
}
