<?php

class General_model extends CI_Model{
    public function add_logo_fav($favicon){
        $data = array(
            'logo'      =>  $this->input->post('logo'),
            'favicon'   =>  $favicon
        );

        $this->db->where('id', 1);
        return $this->db->update('logofav', $data);        
    }

    public function getLogo(){
        $query = $this->db->get_where('logofav');
        return $query->result_array();
    }

    public function updatesocial(){
        $data = array(
            'facebook'  =>  $this->input->post('facebook'),
            'twitter'   =>  $this->input->post('twitter'),
            'youtube'   =>  $this->input->post('youtube'),
            'instagram' =>  $this->input->post('instagram')
        );
        $this->db->where('id', 1);
        return $this->db->update('sociallinks', $data);
    }

    public function getSocial(){
        $query = $this->db->get_where('sociallinks');
        return $query->result_array();
    }
}