<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_News', 'M_League', 'M_Sport_Type'));

        // Memanggil library visitor dengan method count
        $this->visitor->count();
    }

    public function indexUser(){
        $data_sportType = $this->M_Sport_Type->get();
        $data_news =  [];
        foreach ($data_sportType as $sportType) {
            $data_news[$sportType->name_type] = $this->M_News->getNews($sportType->id);
        }
        $context = [
            'lastest_news' => $this->M_News->get_lastest_news(),
            'lastest_news_result' => $this->M_News->get_lastest_news_result(),
            'data_news' => $data_news,
            'data_sportType' => $data_sportType
        ];
        $this->template->user_template('User/Home',$context);
    }

    public function indexAdmin() {
        isAdminLogin();
        $data = [
            'total_news' => $this->db->count_all('news'),
            'total_user' => $this->db->count_all('user'),
            'total_club' => $this->db->count_all('sport_club'),
            'total_athlete' => $this->db->count_all('sport_athlete'),
        ];
        $this->template->show('Admin/dashboard', $data);
    }

    public function sport() {

    }

    public function league() {
        
    }

    public function searchNews() {
        $query = $this->input->get('q');
        $this->load->model(array('M_News', 'M_Sport_Type'));
        
        $data_news = [];
        if (!empty($query)) {
            $data_news = $this->db->query("SELECT news.*, user.fullname 
                                           FROM news, user 
                                           WHERE news.user_id = user.id 
                                             AND news.news_status = 'published' 
                                             AND (news.title LIKE ? OR news.description LIKE ? OR news.body LIKE ?) 
                                           ORDER BY news.created_at DESC", 
                                           array("%$query%", "%$query%", "%$query%"))->result();
        }
        
        $context = [
            'query' => $query,
            'data_news' => $data_news,
            'data_sportType' => $this->M_Sport_Type->get()
        ];
        $this->template->user_template('User/search', $context);
    }
}