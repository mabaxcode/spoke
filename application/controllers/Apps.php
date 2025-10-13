<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apps extends CI_Controller {

    function __construct()
	{
        parent::__construct();

		// Check if user is logged in
		if (!$this->session->userdata('user_id')) {
			redirect();
		}

        $this->user_id = $this->session->userdata('user_id');

        $this->load->model('Apps_model');
        $this->load->helper(['url', 'form']);
	}

	public function index()
	{	
		$this->load->view('pages/page-2');
	}

    public function pagesThree()
    {
        $this->load->view('pages/page-3');
    }

    public function pagesFour()
    {
        $this->load->view('pages/page-4');
    }

    public function pagesFive()
    {
        $this->load->view('pages/page-5');
    }

    public function pagesSix()
    {
        $this->load->view('pages/page-6');   
    }

    public function pagesSeven()
    {
        $this->load->view('pages/page-7');   
    }

    public function pagesEight()
    {
        $this->load->view('pages/page-8');   
    }

    public function pagesNine()
    {
        $this->load->view('pages/page-9');   
    }

    public function pagesTen()
    {
        $this->load->view('pages/page-10');   
    } 

    public function pagesEleven()
    {
        $this->load->view('pages/page-11');   
    }

    public function pagesTwelve()
    {
        $this->load->view('pages/page-12');   
    }

    public function pagesThirteen()
    {
        $this->load->view('pages/page-13');   
    }

    public function pagesFourteen()
    {
        // $this->load->view('pages/page-14');   
        echo "coming soon";
    }

    function save_answer($data=false)
    {
        $post = $this->input->post();

        $updateAnswer = $this->Apps_model->update_answer($this->user_id, $post);

        // echo "<pre>"; print_r($post); echo "</pre>"; exit;

        if($updateAnswer == true){
            echo json_encode([
                "success" => true,
                "message" => "Success"
            ]);
        } else {
            echo json_encode([
                "success" => false,
                "message" => "Gagal untuk simpan jawapan"
            ]);
        }

    }
    
}
