<?php

class Page extends CI_Controller
{
    public function addpage()
    {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('desc', 'Description', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('page/addpage');
        } else {
            $this->page_model->addPage();

            $this->session->set_flashdata('page_created', 'The page has been created');
            redirect('page/addpage');
        }
    }

    public function view($slug)
    {
        $data['logotext'] = $this->general_model->getLogo();
        $data['socialLinks'] = $this->general_model->getSocial();
        $data['pages'] = $this->page_model->getPages();

        $data['page'] = $this->page_model->viewPage($slug);
        $this->load->view('page/view', $data);
    }

    public function allpage()
    {
        $data['allpage'] = $this->page_model->allPage();
        $this->load->view('page/allpage', $data);
    }

    public function editpage($id)
    {
        $data['page']   =   $this->page_model->editPage($id);
        $this->load->view('page/editpage', $data);
    }

    public function updatepage(){
        $this->page_model->updatePage();
        $this->session->set_flashdata('page_updated', 'The page has been updated');
        redirect('page/allpage');
    }

    public function delete($id){
        $this->page_model->deletePage($id);
        $this->session->set_flashdata('page_deleted', 'The page has been deleted');
        redirect('page/allpage');
    }
}
