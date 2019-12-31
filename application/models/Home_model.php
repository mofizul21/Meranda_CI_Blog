<?php

class Home_model extends CI_Model
{
    public function getSliders()
    {

        $this->db->order_by('id', 'DESC');
        $query = $this->db->get_where('slider');

        return $query->result_array();
    }

    public function getLogo()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get_where('logofav');
        return $query->result_array();
    }
}
