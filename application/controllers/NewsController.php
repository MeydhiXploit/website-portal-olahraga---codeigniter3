<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewsController extends CI_Controller{
    private $_uploaded_thumbnail = null;

    public function __construct()
    {
        parent::__construct();
        // Memanggil library visitor dengan method count
        $this->visitor->count();
        $this->load->library('form_validation');
        $this->load->model(array('M_News', 'M_Review', 'M_Sport_Type', 'M_League', 'M_Match'));

    }

    public function news_page() 
    {
        $news_slug = $this->uri->segment(2);
        $news = $this->M_News->getNews_by_slug($news_slug);
        $context = [
            'lastest_news_result' => $this->M_News->get_lastest_news_result(),
            'data_sportType' => $this->M_Sport_Type->get(),
            'news' => $news,
            'data_match' => $this->M_Match->getMatch_today_by_sport($news->sport_type)
        ];
        $this->template->user_template('User/news-detail', $context);
    }




    public function upload_data() 
    {
        $config['upload_path']          = FCPATH.'upload';
        $config['allowed_types']        = 'jpg|jpeg|png|webp|gif';
        $config['file_name']            = uniqid();
        $config['overwrite']            = true;
        $config['max_size']             = 2048; // 1MB
        // $config['max_width']            = 1080;
        // $config['max_height']           = 1080;
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('thumbnail')) return $this->upload->display_errors();
        else return $this->upload->data();
    }

    /**
     * NEWS
     */
    public function select_sportType() {
        isAdminLogin();
        $context = [
            'sport_type' => $this->M_Sport_Type->get()
        ];
        $this->template->show('Admin/news/select-sportType', $context);
    }

    public function news()
    {
        isAdminLogin();
        $sport_type_id = $this->uri->segment(4);
        $context = [
            'data_news' => $this->M_News->getNews($sport_type_id),
        ];
        $this->template->show('Admin/news/index', $context);
    }

    public function upload_thumbnail_check($str)
    {
        if (empty($_FILES['thumbnail']['name'])) {
            return TRUE;
        }
        $upload = $this->upload_data();
        if (!is_array($upload)) {
            $detected_mime = 'unknown';
            if (isset($_FILES['thumbnail']['tmp_name']) && file_exists($_FILES['thumbnail']['tmp_name'])) {
                if (function_exists('mime_content_type')) {
                    $detected_mime = mime_content_type($_FILES['thumbnail']['tmp_name']);
                }
            }
            $file_info = " (Name: " . $_FILES['thumbnail']['name'] . ", Browser Type: " . $_FILES['thumbnail']['type'] . ", Detected Type: " . $detected_mime . ")";
            $this->form_validation->set_message('upload_thumbnail_check', strip_tags($upload) . $file_info);
            return FALSE;
        }
        $this->_uploaded_thumbnail = $upload;
        return TRUE;
    }

    public function news_actions()
    {
        isAdminLogin();
        $sport_type_id = $this->uri->segment(4);
        $id_news = !empty($this->uri->segment(5)) ? $this->uri->segment(5) : NULL;
        $context = [
            'data_news' => !empty($id_news) ? $this->M_News->getNews($sport_type_id,$id_news) : null,
        ];

        if (empty($sport_type_id)) {
            show_404();
        }
        else {

            $this->form_validation->set_rules('title', 'Title', 'required', array('required' => "Title tidak boleh kosong"));
            $this->form_validation->set_rules('description', 'Description', 'required', array('required' => "Description tidak boleh kosong"));
            $this->form_validation->set_rules('body', 'Weight', 'required', array('required' => "Body tidak boleh kosong"));
            $this->form_validation->set_rules('news_status', 'News Status', 'required', array('required' => "News Status tidak boleh kosong"));
            if (!empty($id_news)) {
                $this->form_validation->set_rules('thumbnail-lama', 'Thumbnail', 'required', array('required' => "Thumbnail tidak boleh kosong")); 
                $this->form_validation->set_rules('thumbnail', 'Thumbnail', 'callback_upload_thumbnail_check');
            } else {
                if (empty($_FILES['thumbnail']['name'])) {
                    $this->form_validation->set_rules('thumbnail', 'Thumbnail', 'required', array('required' => "Thumbnail tidak boleh kosong"));
                } else {
                    $this->form_validation->set_rules('thumbnail', 'Thumbnail', 'callback_upload_thumbnail_check');
                }
            }

            

            if ($this->input->method() === 'post') {
                if ($this->form_validation->run() === TRUE) {
                    $upload = !empty($this->_uploaded_thumbnail) ? $this->_uploaded_thumbnail : null;

                    if (empty($id_news)) {
                        if (!empty($upload['file_name'])) $this->M_News->actions($sport_type_id, NULL, $upload['file_name']);
                        else $this->M_News->actions($sport_type_id);
                        redirect('admin/news/sport/'.$sport_type_id);
                    }
                    else {
                        if (!empty($upload['file_name'])) $this->M_News->actions($sport_type_id, $id_news, $upload['file_name']);
                        else $this->M_News->actions($sport_type_id , $id_news);
                        redirect('admin/news/sport/'.$sport_type_id);
                    }
                }
            }

            $this->template->show('admin/news/actions', $context);
        }

    }

    public function news_delete()
    {
        $id = $this->uri->segment(4);
        $this->M_News->delete($id);
        echo "<script>history.back()</script>";

    }


    /**
     * REVIEW
     */
    public function reviews()
    {
        echo "INDEX REVIEW";
        $context = [
            'data_review' => $this->M_Review->getReview(),
        ];
        echo '<pre>';
        echo var_dump($context);
    }

    public function reviews_actions()
    {
        $news_id =  $this->uri->segment(3);
        $review_id = !empty($this->uri->segment(4)) ? $this->uri->segment(4) : NULL;

        $context = [
            'data_review' => !empty($review_id) ? $this->M_Review->getReview($news_id, $review_id) : null,
        ];

        if (empty($news_id)) {
            show_404();
        } else {
            $this->form_validation->set_rules('rating', 'Type Nama', 'required', array('required'=> "Rating tidak boleh kosong"));

            if ($this->form_validation->run() === TRUE)
            {
                if (!empty($review_id)) $this->M_Review->reviewActions($news_id, $review_id);
                else $this->M_Review->reviewActions($news_id);
                redirect('review');
            }

            // var_dump($context);die;
            $this->load->view('User/review/actions', $context);
        }
    }

    public function reviews_delete()
    {
        $id = $this->uri->segment(3);
        $this->M_Review->reviewDelete($id);
        redirect('review');
    }
}