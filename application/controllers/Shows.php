<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shows extends CI_Controller {

    public function index() {
        $this->load->view('componentes/navbar');
        $this->load->view('shows');
        $this->load->view('componentes/footer');
    }

}