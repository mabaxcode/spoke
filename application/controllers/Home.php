<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
	{
        parent::__construct();

		// Check if user is logged in
		if (!$this->session->userdata('user_id')) {
			redirect();
		}

        $this->load->model('Apps_model');
        $this->load->helper(['url', 'form']);
	}

	public function index()
	{	
		$this->load->view('pages/home');
	}
    
}
