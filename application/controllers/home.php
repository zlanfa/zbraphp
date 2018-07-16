<?php

class home extends CI_Controller
{

    public function index()
    {

        $data['categories'] = $this->Categories_model->get_categories(0);
        $data['posts'] = $this->Posts_model->get_post(0);
        $data['jwt'] = getCookieJWT($this, $this->input->cookie('auth'));

        $this->load->view('header/header', $data, false); //load header
        $this->load->view('content/menu-advert', $data['categories'], false); //load content body
        $this->load->view('content/mix-content', $data['posts'], false); //load mix content
        $this->load->view('footer/footer', $data, false); //load footer

    }

    public function product($id)
    {

        $data['posts'] = $this->Posts_model->get_post($id);
        $data['postImage'] = $this->Posts_model->get_post_image($id);
        $data['comment'] = $this->Posts_model->get_post_comment($id, 'asc');

        $data['jwt'] = getCookieJWT($this, $this->input->cookie('auth'));

        $this->load->view('header/header', $data, false); //load header
        $this->load->view('content/product', $data, false);
        $this->load->view('content/comment', $data, false);
        $this->load->view('footer/footer', $data, false); //load footer

    }

    public function contact()
    {

        $data['jwt'] = getCookieJWT($this, $this->input->cookie('auth'));

        $this->load->view('header/header', $data, false); //load header
        $this->load->view('content/contact', $data, false);
        $this->load->view('footer/footer', $data, false); //load footer

    }

}
