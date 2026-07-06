<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Visitor extends CI_Model {

    public function check_visitor($data){
        
        return $this->db->get_where('visitor', array(
            'ip' => $data['ip'],
            'url' => $data['url'],
            'date' => $data['date'],
        ))->num_rows();
    }

    public function save($data) {
        return $this->db->insert('visitor',$data);
    }
}
