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

    public function create() {
        $data = [
            'current_page' => 'create'
        ];
        $this->load->view('componentes/navbar');
        $this->load->view('usuarios/create');
    }

    public function store() {
          $usuario_data = [
            'nombre' => $this->input->post('nombreUsuario'),
            'email' => $this->input->post('emailUsuario'),
            'password' => $this->input->post('passwordUsuario'),
        ];
    
        $this->usuario_model->add_new_user($usuario_data);
    
        redirect('usuario');
    }

    public function edit($id){
        $this->load->view('componentes/navbar');
        
        $user = $this->usuario_model->get_user_by_id($id);
        $this->load->view('usuarios/edit', $user);
    }

    public function delete($id) {
        $this->usuario_model->delete_user_by_id($id);
        redirect('usuario');
    }

    public function update($id)
    {
        $user_data = [
            'nombre' => $this->input->post('nombreUsuario'),
            'email' => $this->input->post('emailUsuario'),
            'password' => $this->input->post('passwordUsuario'),
            'esAdmin' => $this->input->post('esAdmin')
        ];
    
        $this->usuario_model->update_user($id, $user_data);
    
        redirect('usuario');
    }

    
}