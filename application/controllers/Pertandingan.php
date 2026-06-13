<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertandingan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('Match_model', 'M_Sport_Type', 'M_League'));
        $this->load->library('pagination');
        $this->visitor->count();
    }

    public function index($offset = 0) {
        $sport_filter = $this->input->get('sport');
        $league_filter = $this->input->get('league');

        $config['base_url'] = site_url('pertandingan');
        $config['suffix'] = '?' . http_build_query($_GET, '', '&');
        $config['first_url'] = $config['base_url'] . $config['suffix'];

        $config['total_rows'] = $this->Match_model->get_count_matches_by_sport_or_league($sport_filter, $league_filter);
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

        $matches = $this->Match_model->get_matches_by_sport_or_league($sport_filter, $league_filter, $config['per_page'], (int)$offset);
        $sport_types = $this->M_Sport_Type->get();
        $leagues = $this->M_League->get_all_league();

        $context = [
            'matches' => $matches,
            'sport_types' => $sport_types,
            'leagues' => $leagues,
            'sport_filter' => $sport_filter,
            'league_filter' => $league_filter,
            'data_sportType' => $sport_types,
            'pagination' => $this->pagination->create_links()
        ];

        $this->template->user_template('pertandingan/index', $context);
    }
}
