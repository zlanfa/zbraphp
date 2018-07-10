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

    public function login()
    {

        $username = 'admin9';
        $password = '9999';
        $this->load->model('Authen_model');

        $temp = $this->Authen_model->login($username, $password);
        var_dump($temp);
    }

}
