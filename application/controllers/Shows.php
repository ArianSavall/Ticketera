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
            'show' => $show
        ];

        $this->load->view('componentes/navbar', $data);
        $this->load->view('shows/detalleShow', $data);
    }

}