<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('News_model', 'M_Sport_Type', 'Match_model', 'Athlete_model', 'Club_model'));
        $this->visitor->count();
    }

    public function index() {
        $sport_types = $this->M_Sport_Type->get();
        
        $news_by_sport = [];
        foreach ($sport_types as $sport) {
            $news_by_sport[$sport->name_type] = $this->News_model->get_news_by_sport_type($sport->id, 3);
        }
        
        $latest_news = $this->News_model->get_latest_news(5);
        $latest_matches = $this->Match_model->get_latest_matches(5);
        $latest_athletes = $this->Athlete_model->get_latest_athletes(6);
        $latest_clubs = $this->Club_model->get_latest_clubs(8);
        
        $context = [
            'latest_news' => $latest_news,
            'news_by_sport' => $news_by_sport,
            'latest_matches' => $latest_matches,
            'latest_athletes' => $latest_athletes,
            'latest_clubs' => $latest_clubs,
            'data_sportType' => $sport_types
        ];
        
        $this->template->user_template('home/index', $context);
    }
}
