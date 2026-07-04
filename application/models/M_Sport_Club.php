<?php
<<<<<<< HEAD
defined('BASEPATH') or exit('No direct script access allowed');
=======
defined('BASEPATH') OR exit('No direct script access allowed');
>>>>>>> origin/villari

class M_Sport_Club extends CI_Model
{

    public function __construct()
    {
        $this->load->library('upload');
    }

    public function get($sport_league, $id = NULL)
    {
        if (!empty($id)) {
            return $this->db->query("SELECT * FROM sport_club WHERE id = $id")->row();
        } else {
<<<<<<< HEAD
            return $this->db->get_where('sport_club', array('sport_league' => $sport_league))->result();
        }
    }

    public function get_by_league($id)
=======
            return $this->db->get_where('sport_club',array('sport_league'=>$sport_league))->result();
        }
    }

    public function get_by_league($id) 
>>>>>>> origin/villari
    {
        return $this->db->query("SELECT * FROM sport_club WHERE sport_league = $id")->result();
    }

    public function get_by_sportType($id)
    {
        return $this->db->query("SELECT sport_club.* FROM `sport_club` , league, sport_type WHERE sport_club.sport_league = league.id AND league.sport_type = sport_type.id AND sport_type.id = $id;")->result();
<<<<<<< HEAD
    }

    public function actions($league_id, $id = NULL, $logo = NULL)
=======
    }   

    public function actions($id = NULL, $league_id,  $logo = NULL)
>>>>>>> origin/villari
    {
        if (!empty($id)) {
            $data = [
                'name' => $this->input->post('name'),
                'country' => $this->input->post('country'),
<<<<<<< HEAD
                'logo' => !empty($logo) ? $logo : $this->input->post('logo-lama'),
=======
                'logo' => !empty($logo) ? site_url('upload/' . $logo) : $this->input->post('logo-lama'),
>>>>>>> origin/villari
                'sport_league' => $league_id,
            ];
            return $this->db->update('sport_club', $data, array('id' => $id));
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'country' => $this->input->post('country'),
<<<<<<< HEAD
                'logo' => $logo,
=======
                'logo' => site_url('upload/' . $logo),
>>>>>>> origin/villari
                'sport_league' => $league_id,
            ];
            return $this->db->insert('sport_club', $data);
        }
    }

    public function delete($id)
    {
        return $this->db->delete('sport_club', array('id' => $id));
    }
}
