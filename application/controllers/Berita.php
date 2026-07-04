<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('News_model', 'M_Sport_Type'));
        $this->load->library('pagination');
        $this->visitor->count();
    }

    public function kategori($slug = NULL, $offset = 0)
    {
        if (empty($slug)) {
            show_404();
        }

        $sport_name = str_replace('-', ' ', $slug);
        $sport_type = $this->M_Sport_Type->get_by_name($sport_name);
        if (empty($sport_type)) {
            show_404();
        }

        $config['base_url'] = site_url('sport/' . $slug);
        $config['total_rows'] = $this->News_model->get_count_news_by_category($sport_type->id);
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;

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

        $news_list = $this->News_model->get_news_by_category_paged($sport_type->id, $config['per_page'], (int)$offset);
        $all_categories = $this->M_Sport_Type->get();
        $popular_news = $this->News_model->get_latest_news(5);

        $context = [
            'sport_type' => $sport_type,
            'news_list' => $news_list,
            'all_categories' => $all_categories,
            'popular_news' => $popular_news,
            'data_sportType' => $all_categories,
            'pagination' => $this->pagination->create_links()
        ];

        $this->template->user_template('berita/kategori', $context);
    }

    public function detail($news_slug = NULL)
    {
        if (empty($news_slug)) {
            show_404();
        }

        $news = $this->News_model->get_news_by_slug($news_slug);
        if (empty($news)) {
            show_404();
        }

        $related_news = $this->News_model->get_related_news($news->sport_type, $news->id, 3);
        $all_categories = $this->M_Sport_Type->get();

        $context = [
            'news' => $news,
            'related_news' => $related_news,
            'data_sportType' => $all_categories
        ];

        $this->template->user_template('berita/detail', $context);
    }
}
