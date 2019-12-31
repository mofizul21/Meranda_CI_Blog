<?php

class Slider_model extends CI_Model
{
    public function getSliders()
    {

        $this->db->order_by('id', 'DESC');
        $query = $this->db->get_where('slider');

        return $query->result_array();
    }


    public function add_slider($slider_image)
    {
        $slug = strtolower(url_title($this->input->post('title')));

        $data = array(
            'title'         =>     $this->input->post('title'),
            'description'   =>     $this->input->post('desc'),
            'link'          =>     $this->input->post('link'),
            'slug'          =>     $slug,
            'image'         =>     $slider_image
        );

        return $this->db->insert('slider', $data);
    }

    public function delete_slider($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('slider');
        return true;
    }

    public function editSlider($id)
    {
        $query = $this->db->get_where('slider', array('id' => $id));
        return $query->row_array();
    }

    public function updateSlider($slider_image)
    {
        $data = array(
            'title'         =>  $this->input->post('title'),
            'description'   =>  $this->input->post('desc'),
            'link'          =>  $this->input->post('link'),            
            'slug'          =>  strtolower(url_title($this->input->post('title')))
        );

        if (isset($slider_image)) {
            $data = array(
                'image' =>  $slider_image
            );
        }

        $this->db->where('id', $this->input->post('sliderId'));
        return $this->db->update('slider', $data);
    }
}
