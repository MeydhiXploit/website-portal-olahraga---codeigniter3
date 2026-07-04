<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Player_type extends CI_Controller {

    public function __construct() {
        parent::__construct();
        isAdminLogin();
        $this->load->model(array('Player_type_model', 'M_Sport_Type'));
        $this->load->library('form_validation');
    }

    public function index() {
        $context = [
            'data_player_type' => $this->Player_type_model->get_all()
        ];
        $this->template->show('Admin/player_type/index', $context);
    }

    public function add() {
        $this->form_validation->set_rules('player_type', 'Player Type', 'required', array('required' => '%s tidak boleh kosong.'));
        $this->form_validation->set_rules('sport_type', 'Sport Type', 'required|numeric', array(
            'required' => '%s harus dipilih.',
            'numeric' => '%s tidak valid.'
        ));

        if ($this->form_validation->run() === TRUE) {
            $data = [
                'player_type' => $this->input->post('player_type'),
                'sport_type' => $this->input->post('sport_type'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];
            $this->Player_type_model->insert($data);
            $this->session->set_flashdata('success', 'Data Player Type berhasil ditambahkan.');
            redirect('admin/player-type');
        }

        $context = [
            'sport_types' => $this->M_Sport_Type->get(),
            'title' => 'Tambah Player Type'
        ];
        $this->template->show('Admin/player_type/form', $context);
    }

    public function edit($id = NULL) {
        if (empty($id)) {
            show_404();
        }

        $player_type = $this->Player_type_model->get_by_id($id);
        if (empty($player_type)) {
            show_404();
        }

        $this->form_validation->set_rules('player_type', 'Player Type', 'required', array('required' => '%s tidak boleh kosong.'));
        $this->form_validation->set_rules('sport_type', 'Sport Type', 'required|numeric', array(
            'required' => '%s harus dipilih.',
            'numeric' => '%s tidak valid.'
        ));

        if ($this->form_validation->run() === TRUE) {
            $data = [
                'player_type' => $this->input->post('player_type'),
                'sport_type' => $this->input->post('sport_type'),
                'updated_at' => date('Y-m-d H:i:s')
            ];
            $this->Player_type_model->update($id, $data);
            $this->session->set_flashdata('success', 'Data Player Type berhasil diubah.');
            redirect('admin/player-type');
        }

        $context = [
            'player_type' => $player_type,
            'sport_types' => $this->M_Sport_Type->get(),
            'title' => 'Edit Player Type'
        ];
        $this->template->show('Admin/player_type/form', $context);
    }

    public function delete($id = NULL) {
        if (empty($id)) {
            show_404();
        }

        $player_type = $this->Player_type_model->get_by_id($id);
        if (empty($player_type)) {
            show_404();
        }

        $this->Player_type_model->delete($id);
        $this->session->set_flashdata('success', 'Data Player Type berhasil dihapus.');
        redirect('admin/player-type');
    }
}
