<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Klub extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('Club_model', 'M_Sport_Type'));
        $this->load->library('pagination');
        $this->visitor->count();
    }

    public function index($offset = 0) {
        $config['base_url'] = site_url('klub');
        $config['total_rows'] = $this->Club_model->get_count_clubs();
        $config['per_page'] = 12;
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

        $clubs = $this->Club_model->get_clubs($config['per_page'], (int)$offset);
        $sport_types = $this->M_Sport_Type->get();

        $context = [
            'clubs' => $clubs,
            'data_sportType' => $sport_types,
            'pagination' => $this->pagination->create_links()
        ];

        $this->template->user_template('klub/index', $context);
    }

    public function detail($id = NULL) {
        if (empty($id)) {
            show_404();
        }

        $club = $this->Club_model->get_club_by_id($id);
        if (empty($club)) {
            show_404();
        }

        $roster = $this->Club_model->get_club_roster($id);
        $matches = $this->Club_model->get_club_matches($id);
        $sport_types = $this->M_Sport_Type->get();

        $context = [
            'club' => $club,
            'roster' => $roster,
            'matches' => $matches,
            'data_sportType' => $sport_types
        ];

        $this->template->user_template('klub/detail', $context);
    }
}
