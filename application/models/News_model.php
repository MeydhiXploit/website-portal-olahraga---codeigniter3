<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model {

    public function get_published_news()
    {
        $this->db->select('news.*, user.fullname, sport_type.name_type');
        $this->db->from('news');
        $this->db->join('user', 'news.user_id = user.id', 'left');
        $this->db->join('sport_type', 'news.sport_type = sport_type.id', 'left');
        $this->db->where('news.news_status', 'published');
        $this->db->order_by('news.created_at', 'DESC');
        return $this->db->get()->result();
    }

    public function get_news_by_sport_type($sport_type_id, $limit = 3)
    {
        $this->db->select('news.*, user.fullname, sport_type.name_type');
        $this->db->from('news');
        $this->db->join('user', 'news.user_id = user.id', 'left');
        $this->db->join('sport_type', 'news.sport_type = sport_type.id', 'left');
        $this->db->where('news.news_status', 'published');
        $this->db->where('news.sport_type', $sport_type_id);
        $this->db->order_by('news.created_at', 'DESC');
        $this->db->limit($limit);
        return $this->db->get()->result();
    }

    public function get_latest_news($limit = 5)
    {
        $this->db->select('news.*, user.fullname, sport_type.name_type');
        $this->db->from('news');
        $this->db->join('user', 'news.user_id = user.id', 'left');
        $this->db->join('sport_type', 'news.sport_type = sport_type.id', 'left');
        $this->db->where('news.news_status', 'published');
        $this->db->order_by('news.created_at', 'DESC');
        $this->db->limit($limit);
        return $this->db->get()->result();
    }

    public function get_news_by_category_paged($sport_type_id, $limit, $offset)
    {
        $this->db->select('news.*, user.fullname, sport_type.name_type');
        $this->db->from('news');
        $this->db->join('user', 'news.user_id = user.id', 'left');
        $this->db->join('sport_type', 'news.sport_type = sport_type.id', 'left');
        $this->db->where('news.news_status', 'published');
        $this->db->where('news.sport_type', $sport_type_id);
        $this->db->order_by('news.created_at', 'DESC');
        $this->db->limit($limit, $offset);
        return $this->db->get()->result();
    }

    public function get_count_news_by_category($sport_type_id)
    {
        $this->db->from('news');
        $this->db->where('news_status', 'published');
        $this->db->where('sport_type', $sport_type_id);
        return $this->db->count_all_results();
    }

    public function get_news_by_slug($slug)
    {
        $this->db->select('news.*, user.fullname, sport_type.name_type');
        $this->db->from('news');
        $this->db->join('user', 'news.user_id = user.id', 'left');
        $this->db->join('sport_type', 'news.sport_type = sport_type.id', 'left');
        $this->db->where('news.news_status', 'published');
        $this->db->where('news.news_slug', $slug);
        return $this->db->get()->row();
    }

    public function get_related_news($sport_type_id, $exclude_id, $limit = 3)
    {
        $this->db->select('news.*, user.fullname, sport_type.name_type');
        $this->db->from('news');
        $this->db->join('user', 'news.user_id = user.id', 'left');
        $this->db->join('sport_type', 'news.sport_type = sport_type.id', 'left');
        $this->db->where('news.news_status', 'published');
        $this->db->where('news.sport_type', $sport_type_id);
        $this->db->where('news.id !=', $exclude_id);
        $this->db->order_by('news.created_at', 'DESC');
        $this->db->limit($limit);
        return $this->db->get()->result();
    }
}
