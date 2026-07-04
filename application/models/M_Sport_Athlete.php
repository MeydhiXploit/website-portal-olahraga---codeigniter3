<?php
<<<<<<< HEAD
defined('BASEPATH') or exit('No direct script access allowed');

class M_Sport_Athlete extends CI_Model
{


    public function get_sportType($club_Id)
    {
        return $this->db->query("SELECT sport_type.* FROM sport_type
                                JOIN league ON league.sport_type = sport_type.id
                                JOIN sport_club ON sport_club.sport_league = league.id
                                WHERE sport_club.id = $club_Id");
=======
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Sport_Athlete extends CI_Model {
    
    
    public function get_sportType($club_Id) {
        return $this->db->query("SELECT sport_type.* FROM sport_type, sport_club where sport_type.id = sport_club.id and sport_club.id = $club_Id");
>>>>>>> origin/villari
    }


    /**
     * ATHLETE
     */
<<<<<<< HEAD
    public function getAthlete($club_id, $id = NULL)
=======
    public function getAthlete($club_id, $id = NULL) 
>>>>>>> origin/villari
    {
        if (!empty($id)) {
            return $this->db->query("SELECT * FROM sport_athlete WHERE id = $id")->row();
        } else {
            return $this->db->query("SELECT sport_athlete.*, player_type.player_type as 'player' FROM `sport_athlete`, player_type WHERE sport_athlete.playerType_id = player_type.id and sport_athlete.sport_club = $club_id;")->result();
        }
    }

<<<<<<< HEAD
    public function getAthlete_by_league($league_id)
    {
=======
    public function getAthlete_by_league($league_id) {
>>>>>>> origin/villari
        return $this->db->query("SELECT sport_athlete.*, league.name_league FROM `sport_athlete`, sport_club, league WHERE league.id = $league_id and sport_athlete.sport_club = sport_club.id and sport_club.sport_league = league.id;")->result();
    }


    public function actions($sport_club, $id = NULL, $photo = NULL)
    {
        if (!empty($id)) {
            $data = [
                'name' => $this->input->post('name'),
                'gender' => empty($this->input->post('gender')) ? $this->input->post('gender-lama') : $this->input->post('gender'),
<<<<<<< HEAD
                'age' => $this->input->post('age'),
                'backNumber' => $this->input->post('backNumber'),
                'weight' => $this->input->post('weight'),
                'height' => $this->input->post('height'),
                'photo' => !empty($photo) ? $photo : $this->input->post('photo-lama'),
=======
                'backNumber' => $this->input->post('backNumber'),
                'weight' => $this->input->post('weight'),
                'height' => $this->input->post('height'),
                'photo' => !empty($photo) ? site_url('upload/' . $photo) : $this->input->post('photo-lama'),
>>>>>>> origin/villari
                'date_birth' => date('Y-m-d', strtotime($this->input->post('date_birth'))),
                'playerType_id' => $this->input->post('player_type'),
                'sport_club' => $sport_club,
            ];
            return $this->db->update('sport_athlete', $data, array('id' => $id));
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'gender' => $this->input->post('gender'),
<<<<<<< HEAD
                'age' => $this->input->post('age'),
                'backNumber' => $this->input->post('backNumber'),
                'weight' => $this->input->post('weight'),
                'height' => $this->input->post('height'),
                'photo' => $photo,
=======
                'backNumber' => $this->input->post('backNumber'),
                'weight' => $this->input->post('weight'),
                'height' => $this->input->post('height'),
                'photo' => site_url('upload/' . $photo),
>>>>>>> origin/villari
                'date_birth' => date('Y-m-d', strtotime($this->input->post('date_birth'))),
                'playerType_id' => $this->input->post('player_type'),
                'sport_club' => $sport_club,
            ];
            return $this->db->insert('sport_athlete', $data);
        }
    }


    public function delete($id)
    {
<<<<<<< HEAD
        return $this->db->delete('sport_athlete', array('id' => $id));
=======
        return $this->db->delete('sport_athlete', array('id'=>$id));
>>>>>>> origin/villari
    }


    /**
     * Player Type
     */
    public function getPlayerType($sport_type, $id = NULL)
    {
        if (!empty($id)) {
            return $this->db->query("SELECT * FROM player_type WHERE id = $id")->row();
        } else {
<<<<<<< HEAD
            return $this->db->get_where('player_type', array('sport_type' => $sport_type))->result();
=======
            return $this->db->get_where('player_type', array('sport_type'=>$sport_type))->result();
>>>>>>> origin/villari
        }
    }

    public function getPlayerType_by_sporType($id)
    {
<<<<<<< HEAD
        return $this->db->get('player_type', array('sport_type' => $id))->result();
    }

    public function actionsPlayerType($sportType_id, $id = NULL)
=======
        return $this->db->get('player_type', array('sport_type'=>$id))->result();
    }

    public function actionsPlayerType($sportType_id, $id = NULL) 
>>>>>>> origin/villari
    {
        if (!empty($id)) {
            $data = [
                'player_type' => $this->input->post('player_type'),
                'sport_type' => $sportType_id,
            ];
            return $this->db->update('player_type', $data, array('id' => $id));
<<<<<<< HEAD
        } else {
=======
        }
        else {
>>>>>>> origin/villari
            $data = [
                'player_type' => $this->input->post('player_type'),
                'sport_type' => $sportType_id,
            ];
            return $this->db->insert('player_type', $data);
        }
    }

    public function deletePlayerType($id)
    {
<<<<<<< HEAD
        return $this->db->delete('player_type', array('id' => $id));
=======
        return $this->db->delete('player_type', array('id'=>$id));
>>>>>>> origin/villari
    }

    /**
     * Foul Type
     */
    public function getFoulType($sport_type, $id = NULL)
    {
<<<<<<< HEAD
        if (!$this->db->table_exists('foul_type')) {
            return !empty($id) ? null : [];
        }

=======
>>>>>>> origin/villari
        if (!empty($id)) {
            return $this->db->query("SELECT * FROM foul_type WHERE id = $id")->row();
        } else {
            return $this->db->get_where('foul_type', array('sport_type' => $sport_type))->result();
        }
    }

<<<<<<< HEAD
    public function actionsFoulType($sport_type, $id = NULL)
    {
        if (!$this->db->table_exists('foul_type')) {
            return false;
        }

        $data = [
            'foul_name' => $this->input->post('foul_name'),
            'sport_type' => $sport_type,
        ];

        if (!empty($id)) {
            return $this->db->update('foul_type', $data, array('id' => $id));
        } else {
=======
    public function actionsFoulType($sport_type , $id = NULL) 
    {
        if (!empty($id)) {
            $data = [
                'foul_name' => $this->input->post('foul_name'),
                'sport_type' => $sport_type,
            ];
            return $this->db->update('foul_type', $data, array('id'=>$id));
        }
        else {
            $data = [
                'foul_name' => $this->input->post('foul_name'),
                'sport_type' => $sport_type,
            ];
>>>>>>> origin/villari
            return $this->db->insert('foul_type', $data);
        }
    }

    public function deleteFoulType($id)
    {
<<<<<<< HEAD
        if (!$this->db->table_exists('foul_type')) {
            return false;
        }
        return $this->db->delete('foul_type', array('id' => $id));
=======
        return $this->db->delete('foul_type', array('id'=>$id));
>>>>>>> origin/villari
    }

    /**
     * Foul
     */
    public function getFoul($league_id, $id = NULL)
    {
<<<<<<< HEAD
        if (!$this->db->table_exists('foul')) {
            return !empty($id) ? null : [];
        }

=======
>>>>>>> origin/villari
        if (!empty($id)) {
            return $this->db->query("SELECT * FROM foul WHERE id = $id")->row();
        } else {
            return $this->db->query("SELECT foul.*, foul_type.foul_name, sport_athlete.name,
                                            (select sport_club.name from sport_club where sport_club.id = sport_match.sport_club_1) as  'club_1',
                                            (select sport_club.name from sport_club where sport_club.id = sport_match.sport_club_2) as  'club_2',
                                            league.id as 'league'
                                    from foul , sport_match , sport_club, league, foul_type, sport_athlete
                                    where sport_athlete.id = foul.athlete_id and foul.foul_type = foul_type.id and sport_match.sport_club_1 = sport_club.id  and sport_match.id = foul.match_id and sport_club.sport_league = league.id and league.id = $league_id;")->result();
        }
    }

<<<<<<< HEAD
    public function actionsFoul($id = NULL)
=======
    public function actionsFoul($id = NULL) 
>>>>>>> origin/villari
    {
        if (!empty($id)) {
            $data = [
                'minute' => $this->input->post('match_time'),
                'foul_type' => $this->input->post('foul_type'),
                'match_id' => $this->input->post('match'),
                'athlete_id' => $this->input->post('player'),
            ];
<<<<<<< HEAD
            $this->db->update('foul', $data, array('id' => $id));
        } else {
=======
            $this->db->update('foul', $data, array('id'=> $id));
        }
        else {
>>>>>>> origin/villari
            $data = [
                'minute' => $this->input->post('match_time'),
                'foul_type' => $this->input->post('foul_type'),
                'match_id' => $this->input->post('match'),
                'athlete_id' => $this->input->post('player'),
            ];
            $this->db->insert('foul', $data);
        }
    }

    public function deleteFoul($id)
    {
<<<<<<< HEAD
        return $this->db->delete('foul', array('id' => $id));
    }
}
=======
        return $this->db->delete('foul', array('id'=>$id));
    }
}
>>>>>>> origin/villari
