<?php

class User_model extends CI_Controller {

	public function authenticate($username, $password){
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('user');
        return $query->result();
    }

    public function getUsers(){
        $query = $this->db->get('user');
        return $query->result_array();
    }

    public function insert($user){
        $query = $this->db->insert('user', $user);
        if($this->db->affected_rows() > 0){
            return true;
        }
        else{
            return false;
        }
    }
}