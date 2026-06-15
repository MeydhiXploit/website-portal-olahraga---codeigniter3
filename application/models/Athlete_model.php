<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Athlete_model extends CI_Model {

    public function get_athletes($limit = NULL, $offset = NULL, $sport_type_id = NULL, $club_id = NULL)
    {
        $this->db->select('sport_athlete.*, player_type.player_type, sport_club.name as club_name, sport_club.logo as club_logo, league.name_league, sport_type.name_type');
        $this->db->from('sport_athlete');
        $this->db->join('player_type', 'sport_athlete.playerType_id = player_type.id', 'left');
        $this->db->join('sport_club', 'sport_athlete.sport_club = sport_club.id', 'left');
        $this->db->join('league', 'sport_club.sport_league = league.id', 'left');
        $this->db->join('sport_type', 'league.sport_type = sport_type.id', 'left');
        
        if (!empty($sport_type_id)) {
            $this->db->where('league.sport_type', $sport_type_id);
        }
        if (!empty($club_id)) {
            $this->db->where('sport_athlete.sport_club', $club_id);
        }
        $this->db->order_by('sport_athlete.id', 'DESC');
        if ($limit !== NULL) {
            $this->db->limit($limit, $offset);
        }
        return $this->db->get()->result();
    }

    public function get_count_athletes($sport_type_id = NULL, $club_id = NULL)
    {
        $this->db->from('sport_athlete');
        $this->db->join('sport_club', 'sport_athlete.sport_club = sport_club.id', 'left');
        $this->db->join('league', 'sport_club.sport_league = league.id', 'left');
        if (!empty($sport_type_id)) {
            $this->db->where('league.sport_type', $sport_type_id);
        }
        if (!empty($club_id)) {
            $this->db->where('sport_athlete.sport_club', $club_id);
        }
        return $this->db->count_all_results();
    }

    public function get_athlete_by_id($id)
    {
        $this->db->select('sport_athlete.*, player_type.player_type, sport_club.name as club_name, sport_club.logo as club_logo, league.name_league, sport_type.name_type');
        $this->db->from('sport_athlete');
        $this->db->join('player_type', 'sport_athlete.playerType_id = player_type.id', 'left');
        $this->db->join('sport_club', 'sport_athlete.sport_club = sport_club.id', 'left');
        $this->db->join('league', 'sport_club.sport_league = league.id', 'left');
        $this->db->join('sport_type', 'league.sport_type = sport_type.id', 'left');
        $this->db->where('sport_athlete.id', $id);
        return $this->db->get()->row();
    }

    public function get_latest_athletes($limit = 6)
    {
        return $this->get_athletes($limit);
    }
}
