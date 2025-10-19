<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apps_model extends CI_Model {

    public function check_login($username) {
        $this->db->where('username', $username);
        $query = $this->db->get('student');

        if ($query->num_rows() > 0) {
            $user = $query->row();
            return $user;
        }
        return false;
    }

    function populate_all_question($user_id) {
        
        $data_q1 = [
            'user_id'           => $this->session->userdata('user_id'),
            'created_at'        => date('Y-m-d H:i:s'),
        ];
        $this->db->insert('question_one', $data_q1);

        $data_q2 = [
            'user_id'           => $this->session->userdata('user_id'),
            'created_at'        => date('Y-m-d H:i:s'),
        ];
        $this->db->insert('question_two', $data_q2);

        $data_q3 = [
            'user_id'           => $this->session->userdata('user_id'),
            'created_at'        => date('Y-m-d H:i:s'),
        ];
        $this->db->insert('question_three', $data_q3);  

        $data_q4 = [
            'user_id'           => $this->session->userdata('user_id'),
            'created_at'        => date('Y-m-d H:i:s'),
        ];
        $this->db->insert('question_spoke_one', $data_q4);

        $data_q5 = [
            'user_id'           => $this->session->userdata('user_id'),
            'created_at'        => date('Y-m-d H:i:s'),
        ];
        $this->db->insert('question_spoke_two', $data_q5);

        $data_q6 = [
            'user_id'           => $this->session->userdata('user_id'),
            'type'              => "1",
        ];
        $this->db->insert('writing_answers', $data_q6);

        $data_q7 = [
            'user_id'           => $this->session->userdata('user_id'),
            'type'              => "2",
        ];
        $this->db->insert('writing_answers', $data_q7);

        $data_q8 = [
            'user_id'           => $this->session->userdata('user_id'),
            'type'              => "3",
        ];
        $this->db->insert('writing_answers', $data_q8);

        $data_q9 = [
            'user_id'           => $this->session->userdata('user_id'),
            'type'              => "4",
        ];
        $this->db->insert('writing_answers', $data_q9);

        # all created !
        $data_created = [
            'user_id'           => $this->session->userdata('user_id'),
            'is_created'        => '1'
        ];
        $this->db->insert('created_question', $data_created);

    }

    function created_question($user_id){
        $this->db->where('user_id', $user_id);
        $this->db->where('is_created', '1');
        $query = $this->db->get('created_question');

        if( $query->num_rows() > 0 ){
            return true;
        }
        return false;
    }

    function update_answer($user_id, $data)
    {   
        $correct = "N";
        switch ($data['qtye']) {
            case '1':
                $tableName = "question_one";
                if($data['answer_id'] == 'D'){
                    $correct = "Y";
                }
                break;
            case '2':
                $tableName = "question_two";
                if($data['answer_id'] == 'B'){
                    $correct = "Y";
                }
                break;
            case '3':
                $tableName = "question_three";
                if($data['answer_id'] == 'A'){
                    $correct = "Y";
                }
                break;
            case 'spoke01':
                $tableName = "question_spoke_one";
                if($data['answer_id'] == 'C'){
                    $correct = "Y";
                }
                break;
            case 'spoke02':
                $tableName = "question_spoke_two";
                if($data['answer_id'] == 'D'){
                    $correct = "Y";
                }
                break;
        
            default:
                # code...
                break;
        }

        $this->db->where('user_id', $user_id);
        return $this->db->update($tableName, [
            'answer_id'   => $data['answer_id'],
            'answer_text' => $data['answer_text'],
            'correct'     => $correct,
            'is_submit'  => '1',
        ]);
    }

    function insert_log($user_id, $userAnswer, $totalLogs, $status, $type)
    {
        $data = [
            'user_id'       => $user_id,
            'answer_log'    => $userAnswer,
            'total_logs'    => $totalLogs,
            'status'        => $status,
            'created_at'    => date('Y-m-d H:i:s'),
            'type'          => $type
        ];

        return $this->db->insert('user_logs', $data);
    }

    function count_logs($user_id)
    {
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('user_logs');

        return $query->num_rows();
    }
    
    function check_drag_drop($user_id, $type)
    {
        $this->db->where('user_id', $user_id);
        $this->db->where('type', $type);
        $query = $this->db->get('drag_drop_answers');

        if( $query->num_rows() > 0 ){
            return true;
        }
        return false;
    }

    function done_drag_drop($user_id, $type)
    {
        $data = [
            'user_id'   => $user_id,
            'type'      => $type,
            'done_at'   => date('Y-m-d H:i:s'),
        ];

        return $this->db->insert('drag_drop_answers', $data);
    }

    function check_writing_done($user_id, $type)
    {
        $this->db->where('user_id', $user_id);
        $this->db->where('type', $type);
        $this->db->where('answer !=', '');
        $query = $this->db->get('writing_answers');

        if( $query->num_rows() > 0 ){
            return true;
        }
        return false;
    }
    
    function get_writing_answer($user_id, $type)
    {
        $this->db->where('user_id', $user_id);
        $this->db->where('type', $type);
        $query = $this->db->get('writing_answers');

        if( $query->num_rows() > 0 ){
            return $query->row();
        }
        return false;
    }

    function update_writing_answer($user_id, $data)
    {
        $this->db->where('user_id', $user_id);
        $this->db->where('type', $data['type']);
        return $this->db->update('writing_answers', [
            'answer'   => $data['answer'],
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }

    function save_hantar($user_id)
    {
        $data = [
            'is_submitted'      => '1',
            'submitted_at'      => date('Y-m-d H:i:s'),
        ];

        $this->db->where('id', $user_id);
        return $this->db->update('student', $data);
        
    }
}
