<?php

class home extends CI_Controller {

    public function index()
    {
       
        //load model data
        $this->load->model('Categories_model');
        $this->load->model('Posts_model');
        $data['categories'] = $this->Categories_model->get_categories(0);
        $data['posts'] = $this->Posts_model->get_post(0);
        
        //load header
        $this->load->view('header/header', $data, FALSE);
        //load content body
        $this->load->view('content/menu-advert', $data['categories'], FALSE);
        //load mix content 
        $this->load->view('content/mix-content', $data['posts'], FALSE);
        

        //load footer
        $this->load->view('footer/footer', $data, FALSE);
        
        
    }

}


