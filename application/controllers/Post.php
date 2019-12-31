<?php

class Post extends CI_Controller
{
    public function index()
    {
        // pagination
        $config['base_url'] = base_url() . 'post';
        $config['total_rows'] = $this->db->count_all('posts');
        $config['per_page'] = 5;
        $config['uri_segment'] = 2; //posts/index/pagination_number = 3 segments
        $config['attributes'] = array('class' => 'page-link');
        $config['cur_tag_open'] = '<a class="page-link">';
        $config['cur_tag_close'] = '</a>';
        // init pagination
        $this->pagination->initialize($config);



        $data['logotext'] = $this->general_model->getLogo();
        $data['socialLinks'] = $this->general_model->getSocial();
        $data['posts'] = $this->post_model->getPosts($config['per_page']);
        $data['pages'] = $this->page_model->getPages();

        $this->load->view('post/blogs', $data);
    }
    public function addpost()
    {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('desc', 'Description', 'required');
        $this->form_validation->set_rules('category_id', 'Category', 'required');
        $this->form_validation->set_rules('author', 'Author Name', 'required');

        if ($this->form_validation->run() === FALSE) {
            $data['categories'] = $this->category_model->getCategories();
            $this->load->view('post/addpost', $data);
        } else {
            $config['upload_path']          = './assets/images';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_width']            = 2000;
            $config['max_height']           = 1200;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload()) {
                $errors = array('error' => $this->upload->display_errors());
                $post_image = 'noimage.jpg';
            } else {
                $data = array('upload_data' => $this->upload->data());
                $post_image = $_FILES['userfile']['name'];
            }

            // Set message
            $this->session->set_flashdata('post_created', 'The post has been created.');

            $this->post_model->add_post($post_image);

            redirect('post/addpost');
        }
    }

    public function allpost()
    {
        $data['posts'] = $this->post_model->getPosts();
        $this->load->view('post/allpost', $data);
    }

    public function delete($id)
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('dashboard/login');
        }

        $this->post_model->delete_post($id);
        $this->session->set_flashdata('post_deleted', 'The post has been deleted.');
        redirect('post/allpost');
    }

    public function editpost($id)
    {
        $data['post'] = $this->post_model->editPost($id);
        $data['categories'] = $this->category_model->getCategories();
        $this->load->view('post/editpost', $data);
    }

    public function updatepost()
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
                $post_image = $_FILES['userfile']['name'];
            }
        }

        $this->post_model->updatePost($post_image);

        $this->session->set_flashdata('post_updated', 'The post has been updated.');

        redirect('post/allpost');
    }

    public function view($slug)
    {
        // front-end view
        $data['post'] = $this->post_model->getSinglePost($slug);

        if (empty($data['post'])) {
            echo "<a href='http://localhost/meranda'>Go Home</a>. Go to /controller/Post.php→view() to edit the link";
            show_404();
        }

        $data['logotext'] = $this->general_model->getLogo();
        $data['socialLinks'] = $this->general_model->getSocial();
        $data['pages'] = $this->page_model->getPages();

        $data['posts'] = $this->post_model->getPosts();
        $this->load->view('post/view', $data);
    }

    public function addcomment()
    {
        echo "<b>Comment function is not added yet.</b> <a href='http://localhost/meranda'>Go Home</a>. Go to /controller/Post.php → addcomment() to edit the link";
        show_404();
    }
}
