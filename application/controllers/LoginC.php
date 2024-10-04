<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginC extends CI_Controller {
	
	public function index()
	{
        
           $dato['conforme'] ="";
        
        $this->load->view('componentes/navbar');
		$this->load->view('login/LoginView',$dato);
	}
        
        public function ValidaUsuario(){
            
            /*Recibe los datos de user y pass y tiene que validarlos*/
            
            $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS); //$_POST['usuario']
            
            $pass = filter_input(INPUT_POST, 'clave', FILTER_SANITIZE_SPECIAL_CHARS);
           
            /*levanto el model ModeloPrueba y uso su function valIngreso pasandole los parametros usuario y clave recibidos de la vista*/
           
            
           
            $this->load->model('LoginM');
            $usuario=$this->LoginM->valIngreso($usuario,$pass);
            
            
            if($usuario != null){
                //if($usuario->$esAdmin == 0){
                    $this->load->view('componentes/navbarRegistrado', array('user' => $usuario));
                    $this->load->view('inicio');
                //}
                //else{
                 //   $this->load->view('componentes/navbar');
                 //   $this->load->view('componentes/inicio');
                 //   echo("ESTAS EN ADMIN");
                    //abrir admin vista
                //}   
            }
            else {               
                $dato['conforme']="Clave y usuario incorrectos";
                $this->load->view('login/LoginView',$dato);
            }
            
        }       
    }
        

