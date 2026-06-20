<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Match_model extends CI_Model {

    public function get_published_matches($limit = NULL, $offset = NULL)
    {
        $this->db->select('sport_match.*, club1.name as club_1, club1.logo as logo_club_1, club2.name as club_2, club2.logo as logo_club_2, league.name_league');
        $this->db->from('sport_match');
        $this->db->join('sport_club as club1', 'sport_match.sport_club_1 = club1.id', 'left');
        $this->db->join('sport_club as club2', 'sport_match.sport_club_2 = club2.id', 'left');
        $this->db->join('league', 'club1.sport_league = league.id', 'left');
        $this->db->where('sport_match.match_status', 'published');
        $this->db->order_by('sport_match.match_date', 'DESC');
        if ($limit !== NULL) {
            $this->db->limit($limit, $offset);
        }
        return $this->db->get()->result();
    }

    public function get_count_published_matches()
    {
        $this->db->from('sport_match');
        $this->db->where('match_status', 'published');
        return $this->db->count_all_results();
    }

    public function get_matches_by_sport_or_league($sport_type_id = NULL, $league_id = NULL, $limit = NULL, $offset = NULL)
    {
        $this->db->select('sport_match.*, club1.name as club_1, club1.logo as logo_club_1, club2.name as club_2, club2.logo as logo_club_2, league.name_league');
        $this->db->from('sport_match');
        $this->db->join('sport_club as club1', 'sport_match.sport_club_1 = club1.id', 'left');
        $this->db->join('sport_club as club2', 'sport_match.sport_club_2 = club2.id', 'left');
        $this->db->join('league', 'club1.sport_league = league.id', 'left');
        $this->db->where('sport_match.match_status', 'published');
        if (!empty($sport_type_id)) {
            $this->db->where('league.sport_type', $sport_type_id);
        }
        if (!empty($league_id)) {
            $this->db->where('league.id', $league_id);
        }
        $this->db->order_by('sport_match.match_date', 'DESC');
        if ($limit !== NULL) {
            $this->db->limit($limit, $offset);
        }
        return $this->db->get()->result();
    }

    public function get_count_matches_by_sport_or_league($sport_type_id = NULL, $league_id = NULL)
    {
        $this->db->from('sport_match');
        $this->db->join('sport_club as club1', 'sport_match.sport_club_1 = club1.id', 'left');
        $this->db->join('league', 'club1.sport_league = league.id', 'left');
        $this->db->where('sport_match.match_status', 'published');
        if (!empty($sport_type_id)) {
            $this->db->where('league.sport_type', $sport_type_id);
        }
        if (!empty($league_id)) {
            $this->db->where('league.id', $league_id);
        }
        return $this->db->count_all_results();
    }

    public function get_latest_matches($limit = 5)
    {
        return $this->get_published_matches($limit);
    }
}
