<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userlogout extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        // Destroy session
        $this->session->sess_destroy();

        // Redirect back to login
        redirect();
    }
}
