<?php
<<<<<<< HEAD
defined('BASEPATH') or exit('No direct script access allowed');

class MatchController extends CI_Controller
{

    public function __construct()
    {
=======
defined('BASEPATH') OR exit('No direct script access allowed');

class MatchController extends CI_Controller {
    
    public function __construct() {
>>>>>>> origin/villari
        parent::__construct();
        $this->load->model(array('M_Match', 'M_Sport_Club', 'M_Sport_Type', 'M_League'));
        $this->load->library('form_validation');
    }

<<<<<<< HEAD
    public function select_sportType()
    {
=======
    public function select_sportType() {
>>>>>>> origin/villari
        isAdminLogin();
        $context = [
            'sport_type' => $this->M_Sport_Type->get()
        ];
        $this->template->show('Admin/match/select-sportType', $context);
    }

<<<<<<< HEAD
    public function select_league()
    {
=======
    public function select_league() {
>>>>>>> origin/villari
        isAdminLogin();
        $sportType_id = $this->uri->segment(4);
        if (empty($sportType_id)) {
            show_404();
        }
        $context = [
            'data_league' => $this->M_League->get($sportType_id)
        ];
        $this->template->show('Admin/match/select-league', $context);
    }

<<<<<<< HEAD
    public function indexAdmin()
    {
=======
    public function indexAdmin() {
>>>>>>> origin/villari
        isAdminLogin();
        $league_id = $this->uri->segment(4);
        if (empty($league_id)) {
            show_404();
        }
        $context = [
<<<<<<< HEAD
            'match_today' => $this->M_Match->getMatch_today_only($league_id),
=======
            'match_today'=> $this->M_Match->getMatch_today_only($league_id),
>>>>>>> origin/villari
            'data_match' => $this->M_Match->getMatch_by_league($league_id),
        ];
        $this->template->show('Admin/match/index', $context);
    }

<<<<<<< HEAD
    public function actions()
    {
        isAdminLogin();
        $id_league = $this->uri->segment(4);
        $id_match = !empty($this->uri->segment(5)) ? $this->uri->segment(5) : NULL;

        if (empty($id_league)) {
=======
    public function actions() {
        isAdminLogin();
        $id_league = $this->uri->segment(4);
        $id_match = !empty($this->uri->segment(5)) ? $this->uri->segment(5) : NULL;
        
        if (empty($id_sport_type) && empty($id_league)) {
>>>>>>> origin/villari
            show_404();
        } else {
            $context = [
                'data_sportClub' => $this->M_Sport_Club->get_by_league($id_league),
                'data_match' => !empty($id_match) ? $this->M_Match->get($id_match) : null,
            ];
<<<<<<< HEAD


            $this->form_validation->set_rules('match_date', 'Match Date', 'required', array('required' => "*Match Date tidak boleh kosong"));
            $this->form_validation->set_rules('match_time', 'Match Time', 'required', array('required' => "*Match Time tidak boleh kosong"));
            $this->form_validation->set_rules('match_status', 'Match Status', 'required', array('required' => "*Match Status tidak boleh kosong"));

            if (empty($id_match)) {
                $this->form_validation->set_rules('sport_club_1', 'Sport Club 1', 'required', array('required' => "*Sport Club 1 tidak boleh kosong"));
                $this->form_validation->set_rules('sport_club_2', 'Sport Club 2', 'required|callback_check_club', array('required' => "*Sport Club 2 tidak boleh kosong"));
            }

            if (!empty($id_match)) {
                $this->form_validation->set_rules('club_1_score', 'Club 1 Score', 'required', array('required' => "*Club 1 Score tidak boleh kosong"));
                $this->form_validation->set_rules('club_2_score', 'Club 2 Score', 'required', array('required' => "*Club 2 Score tidak boleh kosong"));
            }


            if ($this->input->method() === 'post') {
                if ($this->form_validation->run() === TRUE) {
                    if (!empty($id_match)) $this->M_Match->actions($id_match);
                    else $this->M_Match->actions();
                    redirect('admin/match/league/' . $id_league);
                }
            }

=======
    
            
            $this->form_validation->set_rules('match_date', 'Match Date', 'required',array('required'=> "*Match Date tidak boleh kosong"));
            $this->form_validation->set_rules('match_time', 'Match Time', 'required',array('required'=> "*Match Time tidak boleh kosong"));
            $this->form_validation->set_rules('match_status', 'Match Status', 'required',array('required'=> "*Match Status tidak boleh kosong"));
            
            if (empty($id_match)) {
                $this->form_validation->set_rules('sport_club_1', 'Sport Club 1', 'required', array('required'=> "*Sport Club 1 tidak boleh kosong"));
                $this->form_validation->set_rules('sport_club_2', 'Sport Club 2', 'required|callback_check_club',array('required'=> "*Sport Club 2 tidak boleh kosong"));
            }

            if (!empty($id_match)) {
                $this->form_validation->set_rules('club_1_score', 'Club 1 Score', 'required', array('required'=> "*Club 1 Score tidak boleh kosong"));
                $this->form_validation->set_rules('club_2_score', 'Club 2 Score', 'required',array('required'=> "*Club 2 Score tidak boleh kosong"));
            }


            if ($this->input->method() === 'post'){                
                if ($this->form_validation->run() === TRUE)
                {
                    if (!empty($id_match)) $this->M_Match->actions($id_match);
                    else $this->M_Match->actions();
                    redirect('admin/match/league/'.$id_league);
                }
                
            }
            
>>>>>>> origin/villari
            $this->template->show('Admin/match/actions', $context);
        }
    }

<<<<<<< HEAD
    public function check_club($str)
    {
        if ($str === $this->input->post('sport_club_1')) {
            $this->form_validation->set_message('check_club', 'Sport Club  2 tidak boleh sama dengan Sport Club 1');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function delete()
    {
        isAdminLogin();
        $id = $this->uri->segment(4);

=======
    public function check_club($str){
        if ($str === $this->input->post('sport_club_1'))
        {
                $this->form_validation->set_message('check_club', 'Sport Club  2 tidak boleh sama dengan Sport Club 1');
                return FALSE;
        }
        else
        {
                return TRUE;
        }
    }

    public function delete() {
        isAdminLogin();
        $id = $this->uri->segment(4);
        
>>>>>>> origin/villari
        $match = $this->M_Match->get($id);
        $league_id = null;
        if ($match) {
            $club = $this->M_Sport_Club->get(NULL, $match->sport_club_1);
            if ($club) {
                $league_id = $club->sport_league;
            }
        }
<<<<<<< HEAD

        $this->M_Match->delete($id);

=======
        
        $this->M_Match->delete($id);
        
>>>>>>> origin/villari
        if (!empty($league_id)) {
            redirect('admin/match/league/' . $league_id);
        } else {
            redirect('admin/match');
        }
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> origin/villari
