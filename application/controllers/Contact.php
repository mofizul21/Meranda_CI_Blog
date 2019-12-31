<?php

class Contact extends CI_Controller
{
    public function index()
    {
        $data['logotext'] = $this->general_model->getLogo();
        $data['socialLinks'] = $this->general_model->getSocial();
        $data['pages'] = $this->page_model->getPages();

        $this->load->view('contact', $data);
    }

    public function send()
    {
        $subject = "Message from - " . $this->input->post('fname');

        $message = '
        <h3 align="center">Service Query</h3>
        <table border="1" width="100%" cellpadding="5">
            <tr>
                <td width="30%">F. Name:</td>
                <td width="70%">' . $this->input->post("fname") . '</td>
            </tr>
            <tr>
                <td width="30%">L. Name:</td>
                <td width="70%">' . $this->input->post("lname") . '</td>
            </tr>
            <tr>
                <td width="30%">Email:</td>
                <td width="70%">' . $this->input->post("email") . '</td>
            </tr>
            <tr>
                <td width="30%">Phone:</td>
                <td width="70%">' . $this->input->post("phone") . '</td>
            </tr>
            <tr>
                <td width="30%">Message:</td>
                <td width="70%">' . $this->input->post("message") . '</td>
            </tr>
        </table>
        ';

        $config = array(
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => 'xxxxxx@gmail.com',
            'smtp_pass' => 'xxxxxxxxx',
            'mailtype'  => 'html',
            'charset'  => 'iso-8859-1',
            'wordwrap'  => TRUE
        );

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from($this->input->post("email"));
        $this->email->to('contact@themepack.net');
        $this->email->subject($subject);
        $this->email->message($message);
        if ($this->email->send()) {
            $this->session->set_flashdata('message', 'Application Sended');
            redirect('contact');
        } else {
            $this->session->set_flashdata('message', 'There is an error in email send');
            redirect('contact');
        }
    }
}
