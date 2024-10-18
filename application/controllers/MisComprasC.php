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
}