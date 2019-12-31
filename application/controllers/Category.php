<?php

class Category extends CI_Controller
{
    public function addcategory(){
        $this->form_validation->set_rules('category', 'Category', 'required');

        if ($this->form_validation->run() === False) {
            $this->load->view('category/addcategory');
        }else {
            $this->category_model->addCat();
            $this->session->set_flashdata('category_created', 'A category has been created.');
            redirect('category/addcategory');
        }
    }

    public function allcategories(){
        $data['categories'] = $this->category_model->getCategories();
        $this->load->view('category/allcategories', $data);
    }

    public function editcategory($id){
        $data['category']   =   $this->category_model->editCategory($id);
        $this->load->view('category/editcategory', $data);
    }

    public function updatecategory(){
        $this->category_model->updateCategory();
        $this->session->set_flashdata('category_updated', 'The category has been updated');
        redirect('category/allcategories');
    }

    public function delete($id){
        $this->category_model->deleteCategory($id);
        $this->session->set_flashdata('category_deleted', 'The category has been deleted');
        redirect('category/allcategories');
    }
}