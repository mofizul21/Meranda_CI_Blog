<?php

class Home extends CI_Controller
{
    public function index(){

        $data['logotext'] = $this->general_model->getLogo();
        $data['socialLinks'] = $this->general_model->getSocial();
        $data['sliders'] = $this->home_model->getSliders();
        $data['posts_by_id3'] = $this->post_model->postsById3();
        $data['posts_by_id6'] = $this->post_model->postsById6();
        $data['pages'] = $this->page_model->getPages();
        $this->load->view('home', $data);
    }

    public function contact(){
        $data['logotext'] = $this->general_model->getLogo();
        $data['socialLinks'] = $this->general_model->getSocial();
        $data['pages'] = $this->page_model->getPages();
        
        $this->load->view('contact', $data);
    }

    

}
