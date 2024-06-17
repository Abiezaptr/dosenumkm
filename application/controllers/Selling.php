<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Selling extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->database(); // Load the database library
        $this->load->helper(array('form', 'url')); // Load form and URL helpers
    }

    public function index()
    {
        $this->load->view('partials/landing/header');
        $this->load->view('sell/index');
        $this->load->view('partials/landing/footer');
    }

    public function apply()
    {
        $this->load->view('sell/apply');
    }

    public function register()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            // Get data from POST request
            $data = array(
                'consultant_id' => $this->input->post('consultant_id'),
                'username' => $this->input->post('username'),
                'name' => $this->input->post('name'),
                'type' => $this->input->post('type'),
                'desc' => $this->input->post('desc'),
                'gelar' => $this->input->post('gelar'),
                'nama_depan' => $this->input->post('nama_depan'),
                'nama_belakang' => $this->input->post('nama_belakang'),
                'no_ktp' => $this->input->post('no_ktp'),
                'domisili' => $this->input->post('domisili'),
                'alamat' => $this->input->post('alamat')
            );

            // Check if no_ktp already exists
            $this->db->where('no_ktp', $data['no_ktp']);
            $query = $this->db->get('consultant');

            if ($query->num_rows() > 0) {
                // no_ktp already exists, show an error message
                $this->session->set_flashdata('error', 'Nomor KTP sudah terdaftar.');
                redirect('selling/register');
            } else {
                // Handle file uploads
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = 2048; // 2MB

                $this->load->library('upload', $config);

                // Upload selfie_file
                if (!$this->upload->do_upload('selfie_file')) {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect('selling/register');
                } else {
                    $data['selfie_file'] = $this->upload->data('file_name');
                }

                // Upload ktp_file
                if (!$this->upload->do_upload('ktp_file')) {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect('selling/register');
                } else {
                    $data['ktp_file'] = $this->upload->data('file_name');
                }

                // Insert data into the consultant table
                $this->db->insert('consultant', $data);

                // Redirect or load a view after successful registration
                redirect('selling/success');
            }
        } else {
            $this->load->view('partials/other/header');
            $this->load->view('sell/register');
            $this->load->view('partials/other/footer');
        }
    }

    public function success()
    {
        $this->load->view('partials/other/header');
        $this->load->view('sell/success');
        $this->load->view('partials/other/footer');
    }
}
