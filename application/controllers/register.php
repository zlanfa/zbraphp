<?php

class register extends CI_Controller
{

    public function index()
    {
        $data = [];
        //go to page register
        $this->load->view('header/header', $data, false); //load header
        $this->load->view('authen/register', $data, false);
        $this->load->view('footer/footer', $data, false); //load footer
    }

}
