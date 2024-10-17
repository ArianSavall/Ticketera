<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shows extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('show_model');
    }

    public function index() {
        $shows = $this->show_model->get_all_shows();

        $data = [
            'current_page' => 'shows',
            'shows' => $shows
        ];

        $this->load->view('componentes/navbar', $data);
        $this->load->view('shows/shows');
    }

    // muestra el detalle de un solo show
    public function show($id)
    {
        $show = $this->show_model->get_show_by_id($id);

        if($show == null) {
            show_404();
        }

        $data = [
            'current_page' => 'detalleShow',
            'show' => $show,
            'errormsg' => ''
        ];
        
        $this->session->set_flashdata('showData', $data);

        $this->load->view('componentes/navbar', $data);
        $this->load->view('shows/detalleShow', $data);
    }

    public function validarSesion($idShow){
        if($this->session->has_userdata('nombre')){
            $this->compraExitosa($idShow);
        }else{
            $this->faltaIniciarSesion($idShow);
        }
    }


    public function compraExitosa($idShow){
        $data['current_page'] = 'compra_exitosa';
        $data['errormsg'] = '';
        $cantEntradas = filter_input(INPUT_POST, 'cantidad', FILTER_SANITIZE_SPECIAL_CHARS);
        
        $this->load->model('CompraM');
        $this->load->model('Show_model');
        if($this->CompraM->insert_compra($this->session->userdata('email'), $idShow, $cantEntradas) == 0){
            $this->Show_model->restar_entradas($idShow, $cantEntradas);

            $this->load->view('componentes/navbar', $data);
            $this->load->view('shows/compra_exitosa', $data);
        }
    }

    public function faltaIniciarSesion($id)
    {
        $show = $this->show_model->get_show_by_id($id);

        if($show == null) {
            show_404();
        }

        $data = [
            'current_page' => 'detalleShow',
            'show' => $show,
            'errormsg' => 'Debe iniciar sesión para realizar la compra'
        ];
        
        $this->load->view('componentes/navbar', $data);
        $this->load->view('shows/detalleShow', $data);
    }
}