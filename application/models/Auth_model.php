<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{

    public function check_login($email)
    {
        $this->db->where('email', $email);
        return $this->db->get('user')->row();
    }

    public function get_next_user_id()
    {
        $row = $this->db->select_max('id')->get('user')->row();
        return (!empty($row->id) ? intval($row->id) + 1 : 1);
    }

    public function register_user($data)
    {
        if (!isset($data['id'])) {
            $data['id'] = $this->get_next_user_id();
        }
        return $this->db->insert('user', $data);
    }
}
