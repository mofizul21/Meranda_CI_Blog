<?php

class Dashboard_model extends CI_Model
{
    public function adminlogin($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $result = $this->db->get('users');
        if ($result->num_rows() == 1) {
            return $result->row(0)->id;
        } else {
            return false;
        }
    }

    public function olduser(){
        $query = $this->db->get_where('users');
        return $query->row_array();
    }

    public function updateUser(){
        $data = array(
            'username'  =>  $this->input->post('username'),
            'password'  =>  md5($this->input->post('password'))
        );

        $this->db->where('id',  $this->input->post('userId'));
        return $this->db->update('users', $data);
    }
    
}
