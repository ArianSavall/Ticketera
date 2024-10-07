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


        // $data['current_page'] = 'shows';
        $data = [
            'current_page' => 'shows',
            'shows' => $shows
        ];

        $this->load->view('componentes/navbar', $data);
        $this->load->view('shows');
    }

}