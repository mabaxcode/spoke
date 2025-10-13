<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
        parent::__construct();

        // Redirect logged-in users away from login page
        if ($this->session->userdata('logged_in')) {
            redirect('home');
        }
    }

	public function index()
	{
		$this->load->view('welcome_message');
	}
}
