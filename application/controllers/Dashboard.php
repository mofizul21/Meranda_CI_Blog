<?php

class Dashboard extends CI_Controller
{
    public function index()
    {
        $this->load->view('dashboard');
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('login');
        } else {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));

            $user_id = $this->dashboard_model->adminlogin($username, $password);

            if ($user_id) {
                $user_data = array(
                    'user_id'   =>  $user_id,
                    'username'   =>  $username,
                    'logged_in'   =>  true
                );

                $this->session->set_userdata($user_data);

                $this->session->set_flashdata('user_loggedin', 'You are now loggedin and can manage everything.');
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('user_loginfailed', 'Login is invalid. Please try again.');
                redirect('dashboard/login');
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');

        $this->session->set_flashdata('user_loggedout', 'You are now logged out.');
        redirect('dashboard/login');
    }

    public function edituser()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('dashboard/login');
        }

        $data['olduser'] = $this->dashboard_model->olduser();
        $this->load->view('edituser', $data);
    }

    public function updateuser(){
        $this->dashboard_model->updateUser();
        $this->session->set_flashdata('user_updated', 'The Admin information has been updated. It will be needed from the next time login.');
        redirect('dashboard');        
    }
}
