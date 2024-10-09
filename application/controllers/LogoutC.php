<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogoutC extends CI_Controller {
        public function index()
        {
            
        }
        
        public function cerrarSesion(){
            $this->session->sess_destroy();
            $data['current_page'] = 'home';
            $this->load->view('componentes/navbar', $data);
            $this->load->view('inicio');
        }       
    }
        


?>