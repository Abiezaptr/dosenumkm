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
                'consultan_id' => $this->input->post('consultan_id'),
                'username' => $this->input->post('username'),
                'name' => $this->input->post('name'),
                'type' => $this->input->post('type'),
                'desc' => $this->input->post('desc'),
                'gelar' => $this->input->post('gelar'),
                'nama_depan' => $this->input->post('nama_depan'),
                'nama_belakang' => $this->input->post('nama_belakang'),
                'no_ktp' => $this->input->post('no_ktp'),
                'domisili' => $this->input->post('domisili'),
                'alamat' => $this->input->post('alamat'),
                'status' => 'pending'
            );

            // Check if no_ktp or username already exists
            $this->db->where('no_ktp', $data['no_ktp']);
            $this->db->or_where('username', $data['username']);
            $query = $this->db->get('consultant');

            if ($query->num_rows() > 0) {
                // no_ktp or username already exists, show an error message
                $this->session->set_flashdata('error', 'Nomor KTP atau Username sudah terdaftar.');
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

                // Simpan consultan_id ke session sebelum redirect
                $this->session->set_userdata(
                    'consultan_id',
                    $data['consultan_id']
                );

                // Redirect or load a view after successful registration
                $this->session->set_flashdata('success', 'Pendfataran anda berhasil dilakukan');
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
        // Ambil consultan_id dari session
        $consultan_id = $this->session->userdata('consultan_id');

        if ($consultan_id) {
            // Query database untuk mendapatkan data lengkap
            $this->db->where('consultan_id', $consultan_id);
            $query = $this->db->get('consultant');
            $data['consultant'] = $query->row_array(); // mengambil data sebagai array

            // Hapus consultan_id dari session jika sudah tidak diperlukan lagi
            // $this->session->unset_userdata('consultan_id');
        } else {
            // Data tidak ditemukan, kirim pengguna ke halaman lain atau tampilkan pesan error
            $data['consultant'] = null;
            $this->session->set_flashdata('error', 'Anda sudah melakukan pendaftaran');
            redirect('selling/register'); // atau halaman yang sesuai
        }

        $this->load->view('partials/other/header', $data);
        $this->load->view('sell/success', $data);
        $this->load->view('partials/other/footer');
    }

    public function webhook()
    {
        $this->session->set_flashdata('success', 'Terimakasih, pendaftaran anda akan segera kami proses');

        redirect('home');
    }
}
