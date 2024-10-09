<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogoutC extends CI_Controller {
        public function index()
        {
            $this->session->set_userdata(null);
            $this->session->sess_destroy();
        
            $this->load->helper('url');
            redirect(base_url()); 
        }      
    }
        


?>