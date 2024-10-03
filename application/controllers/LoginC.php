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
           
            
           
            $this->load->model('ModeloLogueo');
            $valido=$this->ModeloLogueo->valIngreso($usuario,$pass);
            
           
            if($valido != null){
            //var_dump($valido); /*esta funcion nos muestra todo lo que tiene la variable $valido */
                $this->load->view('principal/cabecera');
                $this->load->view('principal/bienvenida');
              
                
            }
            else {               
                $dato['conforme']="Clave y usuario incorrectos";
            $this->load->view('login/LoginView',$dato);
            }
            
        }
        //las funciones funcClientes y fucnArticulos, están para que 
        //desde el nav se pueda abrir otra vista
        public function funcClientes(){

            $this->load->view('principal/home');

        }

        public function funcArticulos(){
            $this->load->view('principal/cabecera');

            $this->load->view('principal/articulos');

        }
       
        }
        

