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
        switch ($data['qtye']) {
            case '1':
                $tableName = "question_one";
                break;
            case '2':
                $tableName = "question_two";
                break;
            case '3':
                $tableName = "question_three";
                break;
            
            default:
                # code...
                break;
        }

        $this->db->where('user_id', $user_id);
        return $this->db->update($tableName, [
            'answer_id'   => $data['answer_id'],
            'answer_text' => $data['answer_text'],
        ]);
    }
}
