<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompraM extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert_compra($emailUser, $idShow, $entradasCompradas){
        if(!$this->db->simple_query('INSERT INTO compra (email_usuario,id_espectaculo,cant_entradas_compradas) values ("'.$emailUser.'","'.$idShow.'","'.$entradasCompradas.'")')){
            return $this->db->error;
        }else{
            return 0;
        }
        
    }

    public function get_all_compras()
    {
        $query = $this->db->get('compra');
        return $query->result();
    }

    public function get_compra_by_id($id)
    {
        $query = $this->db->get_where('compra', ['id_compra' => $id]);
        return $query->row();
    }

}