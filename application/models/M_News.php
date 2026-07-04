<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_News extends CI_Model
{
    public function getNews($sport_type_id, $id = NULL)
    {
        if (!empty($id)) {
            return $this->db->query("SELECT * FROM news WHERE id = $id")->row();
        } else {
            return $this->db->get_where('news', array('sport_type' => $sport_type_id))->result();
        }
    }

    public function get_lastest_news()
    {
        return $this->db->query("SELECT news.*, user.fullname
                                 FROM news 
                                 LEFT JOIN user ON news.user_id = user.id 
                                 WHERE news.news_status = 'published' 
                                 ORDER BY news.created_at DESC;")->row();
    }

    public function getSport_lastest_news($sport_id)
    {
        return $this->db->query("SELECT news.*, user.fullname
                                 FROM news 
                                 LEFT JOIN user ON news.user_id = user.id 
                                 WHERE news.sport_type = $sport_id 
                                   AND news.news_status = 'published' 
                                 ORDER BY news.created_at DESC;")->row();
    }

    public function getSport_lastest_news_result($sport_id)
    {
        return $this->db->query("SELECT news.*, user.fullname
                                 FROM news 
                                 LEFT JOIN user ON news.user_id = user.id 
                                 WHERE news.sport_type = $sport_id 
                                   AND news.news_status = 'published' 
                                 ORDER BY news.created_at DESC LIMIT 5;")->result();
    }

    public function get_lastest_news_result()
    {
        return $this->db->query("SELECT news.*, user.fullname 
                                 FROM news 
                                 LEFT JOIN user ON news.user_id = user.id 
                                 WHERE news.news_status = 'published' 
                                 ORDER BY news.created_at DESC LIMIT 5; ")->result();
    }

    public function getNews_by_slug($slug)
    {
        return $this->db->query("SELECT news.*, user.fullname 
                                 FROM news 
                                 LEFT JOIN user ON news.user_id = user.id 
                                 WHERE news.news_status = 'published' 
                                   AND news.news_slug ='$slug' ")->row();
    }

    public function getNews_by_sport($sport_id)
    {
        return $this->db->query("SELECT news.*, user.fullname 
                                 FROM news 
                                 LEFT JOIN user ON news.user_id = user.id 
                                 WHERE news.news_status = 'published' 
                                   AND news.sport_type ='$sport_id' ")->result();
    }

    public function actions($sport_type_id, $id = NULL, $photo = NULL)
    {
        $session_user_id = $this->session->userdata('id') ?? '10'; // Fallback to admin ID 10
        $tags = trim($this->input->post('news_tags'));
        if (!empty($id)) {
            $data = [
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'body' => $this->input->post('body'),
                'news_status' => $this->input->post('news_status'),
                'news_tags' => $tags,
                'news_slug' => str_replace(' ', '-', strtolower($this->input->post('title'))),
                'thumbnail' => !empty($photo) ? $photo : $this->input->post('thumbnail-lama'),
                'user_id' => $session_user_id,
                'sport_type' => $sport_type_id,
            ];
            return $this->db->update('news', $data, array('id' => $id));
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'body' => $this->input->post('body'),
                'news_status' => $this->input->post('news_status'),
                'news_tags' => $tags,
                'news_slug' => str_replace(' ', '-', strtolower($this->input->post('title'))),
                'thumbnail' => $photo,
                'user_id' => $session_user_id,
                'sport_type' => $sport_type_id,
            ];
            return $this->db->insert('news', $data);
        }
    }


    public function delete($id)
    {
        return $this->db->delete('news', array('id' => $id));
    }
}
