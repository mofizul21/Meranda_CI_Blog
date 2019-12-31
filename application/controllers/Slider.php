<?php

class Slider extends CI_Controller
{
    public function addslider()
    {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('desc', 'Description', 'required');
        $this->form_validation->set_rules('link', 'Link', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('addslider');
        } else {
            $config['upload_path']          = './assets/images';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_width']            = 2000;
            $config['max_height']           = 1200;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload()) {
                $errors = array('error' => $this->upload->display_errors());
                $slider_image = 'noimage.jpg';
            } else {
                $data = array('upload_data' => $this->upload->data());
                $slider_image = $_FILES['userfile']['name'];
            }

            // Set message
            $this->session->set_flashdata('slider_created', 'The slider has been created.');

            $this->slider_model->add_slider($slider_image);

            redirect('slider/addslider');
        }
    }

    public function allslider()
    {
        $data['sliders'] = $this->slider_model->getSliders();
        $this->load->view('allslider', $data);
    }

    public function delete($id)
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('dashboard/login');
        }

        $this->slider_model->delete_slider($id);
        $this->session->set_flashdata('slider_deleted', 'The slider has been deleted.');
        redirect('slider/allslider');
    }

    public function editslider($id)
    {
        $data['slider'] = $this->slider_model->editSlider($id);

        $this->load->view('editslider', $data);
    }

    public function updateslider()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('dashboard/login');
        }

        if (!empty($_FILES['userfile']['name'])) {
            $config['upload_path']          = './assets/images';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_width']            = 2000;
            $config['max_height']           = 1200;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile')) {
                array('error' => $this->upload->display_errors());
            } else {
                array('upload_data' => $this->upload->data());
                $slider_image = $_FILES['userfile']['name'];
            }
        }

        $this->slider_model->updateSlider($slider_image);

        $this->session->set_flashdata('slider_updated', 'The slider has been updated.');

        redirect('slider/allslider');
    }
}
