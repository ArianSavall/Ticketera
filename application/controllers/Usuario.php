<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('usuario_model');
    }

    public function index() {
        $users = $this->usuario_model->get_all_users();

        $data = ['users' => $users];

        $this->load->view('componentes/navbar', $data);

        if($this->session->userdata('esAdmin')) {
            $this->load->view('admin/listaUsuarios', $data);
        } else {
            show_error('No tienes acceso');
        }

    }
}