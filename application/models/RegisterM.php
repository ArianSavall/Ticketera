<?php

class RegisterM extends CI_Model {

 

    function __construct() { 
        parent::__construct();
    }

    function validarPassword($pass1, $pass2){
        return strcmp($pass1, $pass2);
    }

    function validarEmail($email){
        $consulta = $this->db->query("SELECT * FROM user  
                                    WHERE email = '" . $email . "'");
    
        if ($consulta->num_rows() == 1) {       
            return true;
        }else {
            return false;
        }
    }

    function registrarUsuario($usuario, $pass, $email){        
       if(! $this->db->simple_query("INSERT INTO user (email, password, nombre, esAdmin) VALUES ('".$email."', '".$pass."', '".$usuario."', 0)")){
            return $this->db->error();
       }else{
            return 0;
       }
    }
}
?>