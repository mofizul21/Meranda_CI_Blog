<?php

class Page_model extends CI_Model
{
    public function addPage()
    {
        $slug = strtolower(url_title($this->input->post('title')));
        $data = array(
            'title'         =>  $this->input->post('title'),
            'slug'          =>  $slug,
            'description'   =>  $this->input->post('desc')
        );

        return $this->db->insert('page', $data);
    }

    public function getPages(){
        // for front-end view
        $this->db->from('page');
        return $this->db->get()->result_array();
    }

    public function viewPage($slug){
        $query = $this->db->get_where('page', array('slug' => $slug));
        return $query->row_array();
    }

    public function allPage(){
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get_where('page');
        return $query->result_array();
    }

    public function editPage($id){
        $query = $this->db->get_where('page', array('id'=>$id));
        return $query->row_array();
    }

    public function updatePage(){
        $slug = strtolower(url_title($this->input->post('title')));
        $data = array(
            'title'         =>  $this->input->post('title'),
            'slug'          =>  $slug,
            'description'   =>  $this->input->post('desc')
        );

        $this->db->where('id',  $this->input->post('pageId'));
        return $this->db->update('page', $data);
    }

    public function deletePage($id){
        $this->db->where('id', $id);
        $this->db->delete('page');
        return true;
    }
}
