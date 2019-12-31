<?php

class General extends CI_Controller
{
    public function addlogo()
    {
        $this->form_validation->set_rules('logo', 'Logo Text', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('general/addlogo');
        } else {
            $config['upload_path']          = './assets/images';
            $config['allowed_types']        = 'gif|jpg|png|ico';
            $config['max_width']            = 100;
            $config['max_height']           = 100;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload()) {
                $errors = array('error' => $this->upload->display_errors());
                $favicon = 'favicon.ico';
            } else {
                $data = array('upload_data' => $this->upload->data());
                $favicon = $_FILES['userfile']['name'];
            }

            $this->session->set_flashdata('logo_updated', 'The logo has been updated.');

            $this->general_model->add_logo_fav($favicon);

            redirect('general/addlogo');
        }
    }

    public function addsocial()
    {
        $this->form_validation->set_rules('facebook', 'Fecebook Link', 'required');
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('general/addsocial');
        } else {
            $this->session->set_flashdata('social_updated', 'Social Links has been updated.');
            $this->general_model->updatesocial();
            redirect('general/addsocial');
        }
    }
}
