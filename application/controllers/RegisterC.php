<?php

class RegisterC extends CI_Controller {
    public function index()
    {
        $data['current_page'] = 'register';
        $dato['errorMessage'] = "";

        $this->load->view('componentes/navbar',$data);
        $this->load->view('login/RegisterView', $dato);
    }      

    public function registrarUsuario(){
        $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
        $passwordRepetida = filter_input(INPUT_POST, 'passwordRepetida', FILTER_SANITIZE_SPECIAL_CHARS);

        $this->load->model('RegisterM');

        if($this->RegisterM->validarPassword($password,$passwordRepetida) == 0){
            if(!($this->RegisterM->validarEmail($email))){
                $error = $this->RegisterM->registrarUsuario($nombre,$password, $email);
                if($error == 0){
                    $data['current_page'] = 'login';
        
                    $this->load->view('componentes/navbar', $data);
                    $this->load->view('login/RegistroExitoso');
    
                }else{
                    $data['current_page'] = 'register';
                    $dato['errorMessage'] = $error;
                    $this->load->view('componentes/navbar',$data);
                    $this->load->view('login/RegisterView',$dato);
                }
            }else{
                $data['current_page'] = 'register';
                $dato['errorMessage'] = "El correo ingresado ya se encuentra registrado";
                $this->load->view('componentes/navbar',$data);
                $this->load->view('login/RegisterView',$dato);
            }

        }else{
            $data['current_page'] = 'register';
            $dato['errorMessage'] = "Las contraseñas no son iguales";
            $this->load->view('componentes/navbar',$data);
            $this->load->view('login/RegisterView',$dato);
        }
    }

}


?>