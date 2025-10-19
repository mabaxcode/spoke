<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
        parent::__construct();

        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }
    }

	public function index()
	{
		$this->load->view('admin/dashboard');
	}

    public function answers()
    {
        // $data['students'] = $this->db->get('student')->result();

        // foreach ($data['students'] as $student) {

        //     $answers1 = $this->db->get_where('question_one', array('user_id' => $student->id))->result();
        //     $answers2 = $this->db->get_where('question_two', array('user_id' => $student->id))->result();
        //     $answers3 = $this->db->get_where('question_three', array('user_id' => $student->id))->result();

        //     $answers4 = $this->db->get_where('question_spoke_one', array('user_id' => $student->id))->result();
        //     $answers5 = $this->db->get_where('question_spoke_two', array('user_id' => $student->id))->result();

        //     $answers6 = $this->db->get_where('drag_drop_answers', array('user_id' => $student->id, 'type' => 1))->result();
        //     $answers7 = $this->db->get_where('drag_drop_answers', array('user_id' => $student->id, 'type' => 2))->result();
        //     $answers8 = $this->db->get_where('drag_drop_answers', array('user_id' => $student->id, 'type' => 3))->result();
        //     $answers9 = $this->db->get_where('drag_drop_answers', array('user_id' => $student->id, 'type' => 4))->result()

        // }

        // $data['students'] = array_values($data['students']);

        // $this->load->view('admin/answers', $data);

        // where submitted is equal to 1
        // $data['students'] = $this->db->get('student')->result();

        $this->db->where('is_submitted', 1);
        $data['students'] = $this->db->get('student')->result();


        // $students_with_answers = [];

        // foreach ($data['students'] as $student) {

        //     // Get all answers for the student
        //     $answers = [
        //         'answers1' => $this->db->get_where('question_one', ['user_id' => $student->id])->result(),
        //         'answers2' => $this->db->get_where('question_two', ['user_id' => $student->id])->result(),
        //         'answers3' => $this->db->get_where('question_three', ['user_id' => $student->id])->result(),
        //         'answers4' => $this->db->get_where('question_spoke_one', ['user_id' => $student->id])->result(),
        //         'answers5' => $this->db->get_where('question_spoke_two', ['user_id' => $student->id])->result(),
        //         'answers6' => $this->db->get_where('drag_drop_answers', ['user_id' => $student->id, 'type' => 1])->result(),
        //         'answers7' => $this->db->get_where('drag_drop_answers', ['user_id' => $student->id, 'type' => 2])->result(),
        //         'answers8' => $this->db->get_where('drag_drop_answers', ['user_id' => $student->id, 'type' => 3])->result(),
        //         'answers9' => $this->db->get_where('drag_drop_answers', ['user_id' => $student->id, 'type' => 4])->result(),
        //     ];

        //     // Store in one array per student
        //     $students_with_answers[] = [
        //         'student' => $student,
        //         'answers' => $answers
        //     ];
        // }

        // $data['students_with_answers'] = $students_with_answers;

        $this->load->view('admin/answers', $data);

    }

    function answers_details($student_id)
    {
        $data['student'] = $this->db->get_where('student', array('id' => $student_id))->row();

        // Get all answers for the student
        $data['answers'] = [
            'answers1' => $this->db->get_where('question_one', ['user_id' => $student_id])->result(),
            'answers2' => $this->db->get_where('question_two', ['user_id' => $student_id])->result(),
            'answers3' => $this->db->get_where('question_three', ['user_id' => $student_id])->result(),
            'answers4' => $this->db->get_where('question_spoke_one', ['user_id' => $student_id])->result(),
            'answers5' => $this->db->get_where('question_spoke_two', ['user_id' => $student_id])->result(),
            'answers6' => $this->db->get_where('drag_drop_answers', ['user_id' => $student_id, 'type' => 1])->result(),
            'answers7' => $this->db->get_where('drag_drop_answers', ['user_id' => $student_id, 'type' => 2])->result(),
            'answers8' => $this->db->get_where('drag_drop_answers', ['user_id' => $student_id, 'type' => 3])->result(),
            'answers9' => $this->db->get_where('drag_drop_answers', ['user_id' => $student_id, 'type' => 4])->result(),
        ];
        $data['student_id'] = $student_id;
        $this->load->view('admin/answers_details', $data);
    }
}
