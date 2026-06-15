<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    public function check_login($email)
    {
        $this->db->where('email', $email);
        return $this->db->get('user')->row();
    }

    public function register_user($data)
    {
        return $this->db->insert('user', $data);
    }
}
