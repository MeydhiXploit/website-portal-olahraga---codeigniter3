<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Player_type_model extends CI_Model {

    public function get_all()
    {
        $this->db->select('player_type.*, sport_type.name_type');
        $this->db->from('player_type');
        $this->db->join('sport_type', 'player_type.sport_type = sport_type.id', 'left');
        $this->db->order_by('player_type.id', 'DESC');
        return $this->db->get()->result();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('player_type', array('id' => $id))->row();
    }

    public function insert($data)
    {
        return $this->db->insert('player_type', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('player_type', $data);
    }

    public function delete($id)
    {
        return $this->db->delete('player_type', array('id' => $id));
    }
}
