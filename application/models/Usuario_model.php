<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_users()
    {
        $query = $this->db->get('user');
        return $query->result();
    }

    public function get_user_by_id($id)
    {
        $query = $this->db->query("SELECT * FROM user  
                                    WHERE id_user = " . $id. "");
        return $query->row();
    }

    public function delete_user_by_id($id) 
    {
        $this->db->delete('user', ['id_user' => $id]);
    }

    public function add_new_user($user_data)
    {
        $this->db->insert('user', $user_data);
    }

    public function update_user($id, $user_data){
        $this->db->where('id_user', $id);
        $this->db->update('user', $user_data);
    }

}