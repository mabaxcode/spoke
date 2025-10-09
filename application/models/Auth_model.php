<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    public function check_login($username, $password) {
        $this->db->where('username', $username);
        $query = $this->db->get('users');

        if ($query->num_rows() > 0) {
            $user = $query->row();
            // verify hashed password
            if (password_verify($password, $user->password)) {
                return $user;
            }
        }
        return false;
    }
}
