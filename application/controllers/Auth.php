<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();

        // Redirect logged-in users away from login page
        if ($this->session->userdata('logged_in')) {
            redirect('admin');
        }

        $this->load->model('Auth_model');
        $this->load->helper(['url', 'form']);
    }

    public function index() {
        // Load login view
        $this->load->view('auth/login');
    }

    public function login() {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);

        $user = $this->Auth_model->check_login($username, $password);

        if ($user) {
            // Set session data
            $this->session->set_userdata([
                'user_id'   => $user->id,
                'username'  => $user->username,
                'role'      => $user->role,
                'logged_in' => true
            ]);

            redirect('admin');
        } else {
            $this->session->set_flashdata('error', 'Invalid username or password');
            redirect('auth');
        }
    }
}
