<?php
<<<<<<< HEAD
defined('BASEPATH') or exit('No direct script access allowed');

class M_News extends CI_Model
{
    public function getNews($sport_type_id, $id = NULL)
=======
defined('BASEPATH') OR exit('No direct script access allowed');

class M_News extends CI_Model {
    public function getNews($sport_type_id, $id = NULL) 
>>>>>>> origin/villari
    {
        if (!empty($id)) {
            return $this->db->query("SELECT * FROM news WHERE id = $id")->row();
        } else {
<<<<<<< HEAD
            return $this->db->get_where('news', array('sport_type' => $sport_type_id))->result();
        }
    }

    public function get_lastest_news()
    {
=======
            return $this->db->get_where('news',array('sport_type'=>$sport_type_id))->result();
        }
    }

    public function get_lastest_news(){
>>>>>>> origin/villari
        return $this->db->query("SELECT news.*, user.fullname
                                 FROM news 
                                 LEFT JOIN user ON news.user_id = user.id 
                                 WHERE news.news_status = 'published' 
                                 ORDER BY news.created_at DESC;")->row();
    }

<<<<<<< HEAD
    public function getSport_lastest_news($sport_id)
    {
=======
    public function getSport_lastest_news($sport_id) {
>>>>>>> origin/villari
        return $this->db->query("SELECT news.*, user.fullname
                                 FROM news 
                                 LEFT JOIN user ON news.user_id = user.id 
                                 WHERE news.sport_type = $sport_id 
                                   AND news.news_status = 'published' 
                                 ORDER BY news.created_at DESC;")->row();
    }

<<<<<<< HEAD
    public function getSport_lastest_news_result($sport_id)
    {
=======
    public function getSport_lastest_news_result($sport_id) {
>>>>>>> origin/villari
        return $this->db->query("SELECT news.*, user.fullname
                                 FROM news 
                                 LEFT JOIN user ON news.user_id = user.id 
                                 WHERE news.sport_type = $sport_id 
                                   AND news.news_status = 'published' 
                                 ORDER BY news.created_at DESC LIMIT 5;")->result();
    }

<<<<<<< HEAD
    public function get_lastest_news_result()
    {
=======
    public function get_lastest_news_result(){
>>>>>>> origin/villari
        return $this->db->query("SELECT news.*, user.fullname 
                                 FROM news 
                                 LEFT JOIN user ON news.user_id = user.id 
                                 WHERE news.news_status = 'published' 
                                 ORDER BY news.created_at DESC LIMIT 5; ")->result();
    }

<<<<<<< HEAD
    public function getNews_by_slug($slug)
    {
=======
    public function getNews_by_slug($slug) {
>>>>>>> origin/villari
        return $this->db->query("SELECT news.*, user.fullname 
                                 FROM news 
                                 LEFT JOIN user ON news.user_id = user.id 
                                 WHERE news.news_status = 'published' 
                                   AND news.news_slug ='$slug' ")->row();
    }

<<<<<<< HEAD
    public function getNews_by_sport($sport_id)
    {
=======
    public function getNews_by_sport($sport_id) {
>>>>>>> origin/villari
        return $this->db->query("SELECT news.*, user.fullname 
                                 FROM news 
                                 LEFT JOIN user ON news.user_id = user.id 
                                 WHERE news.news_status = 'published' 
                                   AND news.sport_type ='$sport_id' ")->result();
    }

    public function actions($sport_type_id, $id = NULL, $photo = NULL)
    {
        $session_user_id = $this->session->userdata('id') ?? '10'; // Fallback to admin ID 10
<<<<<<< HEAD
        $tags = trim($this->input->post('news_tags'));
=======
>>>>>>> origin/villari
        if (!empty($id)) {
            $data = [
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'body' => $this->input->post('body'),
                'news_status' => $this->input->post('news_status'),
<<<<<<< HEAD
                'news_tags' => $tags,
                'news_slug' => str_replace(' ', '-', strtolower($this->input->post('title'))),
                'thumbnail' => !empty($photo) ? $photo : $this->input->post('thumbnail-lama'),
=======
                'news_slug' => str_replace(' ', '-', strtolower($this->input->post('title'))),
                'thumbnail' => !empty($photo) ? site_url('upload/' . $photo) : $this->input->post('thumbnail-lama'),
>>>>>>> origin/villari
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
<<<<<<< HEAD
                'news_tags' => $tags,
                'news_slug' => str_replace(' ', '-', strtolower($this->input->post('title'))),
                'thumbnail' => $photo,
=======
                'news_slug' => str_replace(' ', '-', strtolower($this->input->post('title'))),
                'thumbnail' => site_url('upload/' . $photo),
>>>>>>> origin/villari
                'user_id' => $session_user_id,
                'sport_type' => $sport_type_id,
            ];
            return $this->db->insert('news', $data);
        }
    }


    public function delete($id)
<<<<<<< HEAD
    {
        return $this->db->delete('news', array('id' => $id));
    }
}
=======
    { 
        return $this->db->delete('news', array('id'=>$id));
    }
}
>>>>>>> origin/villari
