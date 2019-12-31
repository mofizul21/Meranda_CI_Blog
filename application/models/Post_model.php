<?php

class Post_model extends CI_Model
{
    public function add_post($post_image)
    {
        $slug = strtolower(url_title($this->input->post('title')));
        $data = array(
            'title' =>  $this->input->post('title'),
            'description' =>  $this->input->post('desc'),
            'image' =>  $post_image,
            'slug' =>  $slug,
            'category_id' =>  $this->input->post('category_id'),
            'author' =>  $this->input->post('author')
        );

        return $this->db->insert('posts', $data);
    }

    public function getPosts($limit = FALSE)
    {
        if ($limit) {
            $this->db->limit($limit);
        }

        $this->db->select('
            categories.id AS category_id,
            categories.catname,
            posts.id,
            posts.title,
            posts.description,
            posts.image,
            posts.slug,
            posts.created_at,
            posts.author
        ');
        $this->db->order_by('posts.id', 'DESC');
        $this->db->from('posts');
        $this->db->join('categories', 'posts.category_id = categories.id');
        return $this->db->get()->result_array();
    }

    public function editPost($id)
    {
        $query = $this->db->get_where('posts', array('id' => $id));
        return $query->row_array();
    }

    public function updatePost($post_image)
    {
        $slug = strtolower(url_title($this->input->post('title')));
        $data = array(
            'title' =>  $this->input->post('title'),
            'description' =>  $this->input->post('desc'),
            'slug' =>  $slug,
            'category_id' =>  $this->input->post('category_id'),
            'author' =>  $this->input->post('author')
        );

        if (isset($post_image)) {
            $data = array(
                'image' =>  $post_image
            );
        }

        $this->db->where('id', $this->input->post('postId'));
        return $this->db->update('posts', $data);
    }

    public function delete_post($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('posts');
        return true;
    }

    public function postsById3()
    {
        $query = $this->db->get_where('posts', array('category_id' => 3), 3);
        return $query->result_array();
    }

    public function postsById6()
    {
        $query = $this->db->get_where('posts', array('category_id' => 6), 3);
        return $query->result_array();
    }

    public function getSinglePost($slug)
    {
        // for front-end view        
        $query = $this->db->get_where('posts', array('slug' => $slug));
        return $query->row_array();        
    }
}
