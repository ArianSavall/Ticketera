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
            return 1;
        }else{
            return 0;
        }
        
    }

    public function delete_compras_by_espectaculo($id){
        $this->db->where('id_espectaculo', $id);
        $this->db->delete('compra');
    }

    public function get_compras_by_email_usuario($email){
        $this->db->select('*');
        $this->db->from('compra');
        $this->db->where('email_usuario', $email);
        $this->db->join('shows', 'shows.id = compra.id_espectaculo');
        $query = $this->db->get();
        return $query->result();
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