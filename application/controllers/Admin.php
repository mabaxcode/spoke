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
        $this->db->where('is_reviewed', 0);
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

    function complete()
    {

        $this->db->where('is_submitted', 1);
        $this->db->where('is_reviewed', 1);
        $data['students'] = $this->db->get('student')->result();

        $this->load->view('admin/complete', $data);
    }

    function answers_details($student_id)
    {
        $data['student'] = $this->db->get_where('student', array('id' => $student_id))->row();

        // Get all answers for the student
        // $data['answers'] = [
        //     'answers1' => $this->db->get_where('question_one', ['user_id' => $student_id])->result(),
        //     'answers2' => $this->db->get_where('question_two', ['user_id' => $student_id])->result(),
        //     'answers3' => $this->db->get_where('question_three', ['user_id' => $student_id])->result(),
        //     'answers4' => $this->db->get_where('question_spoke_one', ['user_id' => $student_id])->result(),
        //     'answers5' => $this->db->get_where('question_spoke_two', ['user_id' => $student_id])->result(),
        //     'answers6' => $this->db->get_where('drag_drop_answers', ['user_id' => $student_id, 'type' => 1])->result(),
        //     'answers7' => $this->db->get_where('drag_drop_answers', ['user_id' => $student_id, 'type' => 2])->result(),
        //     'answers8' => $this->db->get_where('drag_drop_answers', ['user_id' => $student_id, 'type' => 3])->result(),
        //     'answers9' => $this->db->get_where('drag_drop_answers', ['user_id' => $student_id, 'type' => 4])->result(),
        // ];
        $data['student_id'] = $student_id;
        $data['name'] = $data['student']->name;

        $data['writing1'] = get_any_table_row(array('user_id' => $student_id, 'type' => '1'), 'writing_answers');
        $data['writing2'] = get_any_table_row(array('user_id' => $student_id, 'type' => '2'), 'writing_answers');
        $data['writing3'] = get_any_table_row(array('user_id' => $student_id, 'type' => '3'), 'writing_answers');
        $data['writing4'] = get_any_table_row(array('user_id' => $student_id, 'type' => '4'), 'writing_answers');

        // print_r($data['writing1']); exit;

        $this->load->view('admin/answers_details', $data);
    }

    function complete_view($student_id)
    {
        $data['student'] = $this->db->get_where('student', array('id' => $student_id))->row();

        $data['student_id'] = $student_id;
        $data['name'] = $data['student']->name;

        $data['writing1'] = get_any_table_row(array('user_id' => $student_id, 'type' => '1'), 'writing_answers');
        $data['writing2'] = get_any_table_row(array('user_id' => $student_id, 'type' => '2'), 'writing_answers');
        $data['writing3'] = get_any_table_row(array('user_id' => $student_id, 'type' => '3'), 'writing_answers');
        $data['writing4'] = get_any_table_row(array('user_id' => $student_id, 'type' => '4'), 'writing_answers');

        // print_r($data['writing1']); exit;

        $this->load->view('admin/complete_view', $data);
    }

    function update_score()
    {
        $student_id = $this->input->post('student_id');
        $type = $this->input->post('type');
        $score = $this->input->post('score');

        // echo "<pre>"; print_r($_POST); echo "</pre>"; exit;

        $this->db->where('user_id', $student_id);
        $this->db->where('type', $type);
        $this->db->update('writing_answers', array('score' => $score));

        echo json_encode(array('status' => 'success'));
    }

    function save_comment()
    {
        $student_id = $this->input->post('student_id');
        $type = $this->input->post('type');
        $comment = $this->input->post('comment');

        // echo "<pre>"; print_r($_POST); echo "</pre>"; exit;

        $this->db->where('user_id', $student_id);
        $this->db->where('type', $type);
        $this->db->update('writing_answers', array('comment' => $comment));

        echo json_encode(array('status' => 'success'));
    }

    function mark_review_completed()
    {
        $student_id = $this->input->post('student_id');

        $this->db->where('id', $student_id);
        $this->db->update('student', array('is_reviewed' => 1));

        echo json_encode(array('status' => 'success'));
    }

    function tambah_pelajar()
    {
        $this->load->view('admin/tambah_pelajar');
    }

    function proses_tambah_pelajar()
    {
        $name = $this->input->post('name');
        $username = $this->input->post('username');

        // validation name and username are required
        if (empty($name) || empty($username)) {
            $this->session->set_flashdata('error', 'Name and Username are required');
            redirect('admin/tambah_pelajar');
        }

        $data = array(
            'name' => $name,
            'username' => $username,
            'is_submitted' => 0,
            'is_reviewed' => 0,
            'role' => 'student'
        );

        $this->db->insert('student', $data);

        // success flash message
        $this->session->set_flashdata('success', 'Pelajar berjaya ditambah');

        redirect('admin/tambah_pelajar');
    }  
    
    function senarai_pelajar()
    {
        $data['students'] = $this->db->get('student')->result();

        $this->load->view('admin/senarai_pelajar', $data);
    }
    
}
