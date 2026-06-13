<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Atlet extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('Athlete_model', 'M_Sport_Type', 'Club_model'));
        $this->load->library('pagination');
        $this->visitor->count();
    }

    public function index($offset = 0) {
        $sport_filter = $this->input->get('sport');
        $club_filter = $this->input->get('club');

        $config['base_url'] = site_url('atlet');
        $config['suffix'] = '?' . http_build_query($_GET, '', '&');
        $config['first_url'] = $config['base_url'] . $config['suffix'];

        $config['total_rows'] = $this->Athlete_model->get_count_athletes($sport_filter, $club_filter);
        $config['per_page'] = 10;
        $config['uri_segment'] = 2;

        // Bootstrap 4 pagination styling
        $config['full_tag_open'] = '<ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close'] = '</span></li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);

        $athletes = $this->Athlete_model->get_athletes($config['per_page'], (int)$offset, $sport_filter, $club_filter);
        $sport_types = $this->M_Sport_Type->get();
        $clubs = $this->Club_model->get_clubs();

        $context = [
            'athletes' => $athletes,
            'sport_types' => $sport_types,
            'clubs' => $clubs,
            'sport_filter' => $sport_filter,
            'club_filter' => $club_filter,
            'data_sportType' => $sport_types,
            'pagination' => $this->pagination->create_links()
        ];

        $this->template->user_template('atlet/index', $context);
    }

    public function detail($id = NULL) {
        if (empty($id)) {
            show_404();
        }

        $athlete = $this->Athlete_model->get_athlete_by_id($id);
        if (empty($athlete)) {
            show_404();
        }

        $sport_types = $this->M_Sport_Type->get();

        $context = [
            'athlete' => $athlete,
            'data_sportType' => $sport_types
        ];

        $this->template->user_template('atlet/detail', $context);
    }
}
