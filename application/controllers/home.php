<?php

class home extends CI_Controller {

    public function index()
    {
        $data = [];
        //load header
        $this->load->view('header/header', $data, FALSE);
        //load content body
        $this->load->view('content/menu-advert', $data, FALSE);
        //load mix content 
        $this->load->view('content/mix-content', $data, FALSE);
        

        //load footer
        $this->load->view('footer/footer', $data, FALSE);
        
        
    }

}


