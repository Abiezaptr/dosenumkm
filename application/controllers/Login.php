<?php
require_once 'vendor/autoload.php';

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('login');
        } else {
            $email = $this->input->post('email');
            $password = md5($this->input->post('password'));
            $admin = $this->admin_model->login($email, $password);

            if ($admin) {
                $this->session->set_userdata('admin_id', $admin['id']);
                $this->session->set_userdata('nama', $admin['nama']);
                $currentDate = date('d/m/Y');
                $this->session->set_flashdata('success', "Successfully Logged In on $currentDate");

                // check role if success sign to redirect page
                if ($admin['role'] == 1) {
                    redirect('admin/dashboard');
                } elseif ($admin['role'] == 2) {
                    redirect('home');
                }
            } else {
                $this->session->set_flashdata('error', 'Invalid email or password');
                redirect('login');
            }
        }
    }

    public function google_login()
    {
        $client = new \Google_Client();
        $client->setClientId('GOOGLE_CLIENT_ID');
        $client->setClientSecret('GOOGLE_CLIENT_SECRET');
        $client->setRedirectUri('REDIRECT_URI');
        $client->addScope("email");
        $client->addScope("profile");

        if (isset($_GET['code'])) {
            $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

            if (!isset($token['error'])) {
                $client->setAccessToken($token);

                $google_oauth = new \Google_Service_Oauth2($client);
                $google_account_info = $google_oauth->userinfo->get();

                $email = $google_account_info->email;
                $name = $google_account_info->name;
                $profile_picture = $google_account_info->picture;

                $admin = $this->admin_model->get_admin_by_email($email);

                if (!$admin) {
                    $random_password = bin2hex(random_bytes(8));

                    $data = [
                        'email' => $email,
                        'nama' => $name,
                        'password' => password_hash($random_password, PASSWORD_DEFAULT),
                        'role' => 2
                    ];
                    $this->admin_model->insert_admin($data);
                    $admin = $this->admin_model->get_admin_by_email($email);
                }

                // setting response message success
                $this->session->set_flashdata('success', "Successfully Logged In with Google account");
                $this->session->set_userdata('email', $email);
                $this->session->set_userdata('name', $name);
                $this->session->set_userdata('profile_picture', $profile_picture);

                // check users role
                if ($admin['role'] == 1) {
                    redirect('admin/dashboard');
                } elseif ($admin['role'] == 2) {
                    redirect('home');
                }
            } else {
                $this->session->set_flashdata('error', 'Failed to login with Google. Please try again.');
                redirect('login');
            }
        } else {
            $login_url = $client->createAuthUrl();
            redirect($login_url);
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('admin_id');
        $this->session->sess_destroy();
        redirect('home');
    }
}
