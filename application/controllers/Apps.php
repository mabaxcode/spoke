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
        $this->load->view('pages/page-14');  
    }

    public function pagesFifteen()
    {
        $this->load->view('pages/page-15');  
    }

    public function pagesSixteen()
    {
        $this->load->view('pages/page-16');  
    }

    public function pagesSeventeen()
    {
        $this->load->view('pages/page-17');  
    }

    public function pagesEighteen()
    {
        $this->load->view('pages/page-18');  
    }

    public function pagesNineteen()
    {
        $this->load->view('pages/page-19');  
    }

    public function pagesTwenty()
    {
        $this->load->view('pages/page-20');  
    }

    public function pagesTwentyOne()
    {
        $this->load->view('pages/page-21');  
    }

    public function pagesTwentyTwo()
    {
        $this->load->view('pages/page-22');  
    }

    public function pagesTwentyThree()
    {   
        $data['done'] = $this->Apps_model->check_drag_drop($this->user_id, '1');
        $this->load->view('pages/page-23', $data);
    }

    public function pagesTwentyFour()
    {   
        $data['done'] = $this->Apps_model->check_drag_drop($this->user_id, '2');

        $this->load->view('pages/page-24', $data);  
    }

    public function pagesTwentyFive()
    {
        $data['done'] = $this->Apps_model->check_drag_drop($this->user_id, '3');
        $this->load->view('pages/page-25', $data);
    }

    function pagesTwentySix()
    {
        $data['done'] = $this->Apps_model->check_drag_drop($this->user_id, '4');
        $this->load->view('pages/page-26', $data);
    }

    function pagesTwentySeven()
    {
        $this->load->view('pages/page-27');
    }

    public function pagesTwentyEight()
    {
         # check aswer is done or not
        $data['val'] = $this->Apps_model->get_writing_answer($this->user_id, '1');
        $this->load->view('pages/page-28', $data);
    }

    public function pagesTwentyNine()
    {
        
        $data['done'] = $this->Apps_model->check_writing_done($this->user_id, '1');
        $data['val'] = $this->Apps_model->get_writing_answer($this->user_id, '2');
        if($data['done']){
            $this->load->view('pages/page-29', $data);
        }else{
            $this->load->view('pages/page-28', $data);
        }

    }

    public function pagesThirty()
    {
        $data['done'] = $this->Apps_model->check_writing_done($this->user_id, '2');
        $data['val'] = $this->Apps_model->get_writing_answer($this->user_id, '3');
        if($data['done']){
            $this->load->view('pages/page-30', $data);
        }else{
            $this->load->view('pages/page-29', $data);
        }
    }

    public function pagesThirtyOne()
    {
        $data['done'] = $this->Apps_model->check_writing_done($this->user_id, '3');
        $data['val'] = $this->Apps_model->get_writing_answer($this->user_id, '4');
        if($data['done']){
            $this->load->view('pages/page-31', $data);
        }else{
            $this->load->view('pages/page-30', $data);
        }
    }

    public function pagesThirtyTwo()
    {
        $this->load->view('pages/page-32');
    }

    public function pageEnd()
    {
        $this->load->view('pages/page-end');
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

    function insertLogActivityTrue() { 
        $post = $this->input->post();
        $userAnswer = $post['userAnswer'];
        $type = $post['type'];

        # answer is array
        if(is_array($userAnswer)){
            $userAnswer = implode(", ", $userAnswer);
        }

        $logCount = $this->Apps_model->count_logs($this->user_id);

        $totalLogs = $logCount + 1;

        $done = $this->Apps_model->done_drag_drop($this->user_id, $type);

        $this->Apps_model->insert_log($this->user_id, $userAnswer, $totalLogs, "Betul", $type);
        
    }


    function insertLogActivityWrong() { 
        $post = $this->input->post();
        $userAnswer = $post['userAnswer'];
        $type = $post['type'];

        # answer is array
        if(is_array($userAnswer)){
            $userAnswer = implode(", ", $userAnswer);
        }

        // echo "<pre>"; print_r($userAnswer); echo "</pre>"; exit;
        # count how many logs for this user
        $logCount = $this->Apps_model->count_logs($this->user_id);

        $totalLogs = $logCount + 1;

        $this->Apps_model->insert_log($this->user_id, $userAnswer, $totalLogs, "Salah", $type);
    }

    function save_writing_answer() {
        $post = $this->input->post();
        // echo "<pre>"; print_r($post); echo "</pre>"; exit;
        $updateAnswer = $this->Apps_model->update_writing_answer($this->user_id, $post);

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

    function hantar() {
        $this->Apps_model->save_hantar($this->user_id);

        // Redirect back to login
        redirect('userlogout');
    }

    function results($student_id)
    {
        $data['student'] = $this->db->get_where('student', array('id' => $student_id))->row();

        $data['student_id'] = $student_id;
        $data['name'] = $data['student']->name;

        $data['writing1'] = get_any_table_row(array('user_id' => $student_id, 'type' => '1'), 'writing_answers');
        $data['writing2'] = get_any_table_row(array('user_id' => $student_id, 'type' => '2'), 'writing_answers');
        $data['writing3'] = get_any_table_row(array('user_id' => $student_id, 'type' => '3'), 'writing_answers');
        $data['writing4'] = get_any_table_row(array('user_id' => $student_id, 'type' => '4'), 'writing_answers');

        $this->load->view('pages/result', $data);
    }
    
    
}
