<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginC extends CI_Controller {
        public function index()
        {
            
            $dato['conforme'] ="";
            $data['current_page'] = 'login';

            $this->load->view('componentes/navbar', $data);
            $this->load->view('login/LoginView',$dato);
        }
        
        public function ValidaUsuario(){
            
            /*Recibe los datos de user y pass y tiene que validarlos*/
            
            $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS); //$_POST['usuario']
            
            $pass = filter_input(INPUT_POST, 'clave', FILTER_SANITIZE_SPECIAL_CHARS);
           
           
            
           
            $this->load->model('LoginM');
            $usuario=$this->LoginM->valIngreso($usuario,$pass);
        
            if($usuario != null){
                $data['current_page'] = 'login';
                //if($usuario->esAdmin == 0){
                $datosSesion = array(
                    'email' => $usuario->email,
                    'nombre' => $usuario->nombre,
                    'password' => $usuario->password,
                    'esAdmin' => $usuario->esAdmin,
                    'esta_logueado' => TRUE
                );


                $this->session->set_userdata($datosSesion);

                $this->load->view('componentes/navbar', $data);
                $this->load->view('inicio');
                //}
                //else{//abrir admin vista
                    //$this->load->view('componentes/navbar');
                    //$this->load->view('componentes/inicio');
                    //echo("ESTAS EN ADMIN");
                    
                //}   
            }
            else {               
                $dato['conforme']="Clave y usuario incorrectos";
                $data['current_page'] = 'login';
                $this->load->view('componentes/navbar', $data);
                $this->load->view('login/LoginView',$dato);
            }
            
        }       
    }
        

