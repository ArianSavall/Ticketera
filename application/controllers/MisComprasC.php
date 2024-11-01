<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MisComprasC extends CI_Controller {

	public function index()
	{
		$this->load->model('CompraM');
        $email = $this->session->userdata('email');

        $compras = $this->CompraM->get_compras_by_email_usuario($email);

		$data = [
			'current_page' => 'mis_compras',
			'compras' => $compras	
		];


		$this->load->view('componentes/navbar', $data); 
		$this->load->view('login/MisCompras', $data);
	}

	public function obtener_compras_usuario($id){
		$this->load->model('CompraM');
		$this->load->model('Usuario_model');

		$user = $this->Usuario_model->get_user_by_id($id);

        $compras = $this->CompraM->get_compras_by_email_usuario($user->email);

		$data = [
			'current_page' => 'mis_compras',
			'compras' => $compras	
		];


		$this->load->view('componentes/navbar', $data); 
		$this->load->view('login/MisCompras', $data);
	}
	public function listar_compras() {
		$this->load->model('CompraM');
		
		$compras = $this->CompraM->get_all_compras();

		$data = ['compras' => $compras];

		$this->load->view('componentes/navbar', $data);

		if($this->session->userdata('esAdmin')) {
            $this->load->view('admin/listaCompras', $data);
        } else {
            show_error('No tienes acceso');
        }

	}

}