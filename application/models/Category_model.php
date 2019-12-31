<?php

class Category_model extends CI_Model{
    public function addCat(){
        $data = array(
            'catname'   =>  $this->input->post('category')
        );

        return $this->db->insert('categories', $data);
    }

    public function getCategories(){
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get_where('categories');
        return $query->result_array();
    }

    public function editCategory($id){
        $query = $this->db->get_where('categories', array('id'=>$id));
        return $query->row_array();
    }

    public function updateCategory(){
        $data = array(
            'catname'   =>  $this->input->post('category')
        );

        $this->db->where('id',  $this->input->post('categoryId'));
        return $this->db->update('categories', $data);
    }

    public function deleteCategory($id){
        $this->db->where('id', $id);
        $this->db->delete('categories');
        return true;
    }
}