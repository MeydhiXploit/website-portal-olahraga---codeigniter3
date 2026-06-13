<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Club_model extends CI_Model {

    public function get_clubs($limit = NULL, $offset = NULL)
    {
        $this->db->select('sport_club.*, league.name_league, sport_type.name_type');
        $this->db->from('sport_club');
        $this->db->join('league', 'sport_club.sport_league = league.id', 'left');
        $this->db->join('sport_type', 'league.sport_type = sport_type.id', 'left');
        $this->db->order_by('sport_club.id', 'DESC');
        if ($limit !== NULL) {
            $this->db->limit($limit, $offset);
        }
        return $this->db->get()->result();
    }

    public function get_count_clubs()
    {
        $this->db->from('sport_club');
        return $this->db->count_all_results();
    }

    public function get_club_by_id($id)
    {
        $this->db->select('sport_club.*, league.name_league, sport_type.name_type');
        $this->db->from('sport_club');
        $this->db->join('league', 'sport_club.sport_league = league.id', 'left');
        $this->db->join('sport_type', 'league.sport_type = sport_type.id', 'left');
        $this->db->where('sport_club.id', $id);
        return $this->db->get()->row();
    }

    public function get_club_roster($club_id)
    {
        $this->db->select('sport_athlete.*, player_type.player_type');
        $this->db->from('sport_athlete');
        $this->db->join('player_type', 'sport_athlete.playerType_id = player_type.id', 'left');
        $this->db->where('sport_athlete.sport_club', $club_id);
        $this->db->order_by('sport_athlete.name', 'ASC');
        return $this->db->get()->result();
    }

    public function get_club_matches($club_id)
    {
        $this->db->select('sport_match.*, club1.name as club_1, club1.logo as logo_club_1, club2.name as club_2, club2.logo as logo_club_2, league.name_league');
        $this->db->from('sport_match');
        $this->db->join('sport_club as club1', 'sport_match.sport_club_1 = club1.id', 'left');
        $this->db->join('sport_club as club2', 'sport_match.sport_club_2 = club2.id', 'left');
        $this->db->join('league', 'club1.sport_league = league.id', 'left');
        $this->db->group_start();
        $this->db->where('sport_match.sport_club_1', $club_id);
        $this->db->or_where('sport_match.sport_club_2', $club_id);
        $this->db->group_end();
        $this->db->where('sport_match.match_status', 'published');
        $this->db->order_by('sport_match.match_date', 'DESC');
        return $this->db->get()->result();
    }

    public function get_latest_clubs($limit = NULL)
    {
        return $this->get_clubs($limit);
    }
}
