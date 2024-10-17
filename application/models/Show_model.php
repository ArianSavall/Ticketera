<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_shows()
    {
        $query = $this->db->get('shows');
        return $query->result();
    }

    public function restar_entradas($id, $cantEntradas){
        return $this->db->simple_query('UPDATE shows SET cant_entradas_disponibles = cant_entradas_disponibles - '.$cantEntradas.' where id='.$id);
    }

    public function get_show_by_id($id)
    {
        $query = $this->db->get_where('shows', ['id' => $id]);
        return $query->row();
    }
}