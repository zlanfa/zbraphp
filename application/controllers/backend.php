<?php

class backend extends CI_Controller
{

    public function index()
    {
        $data = [];
        $this->load->view('backend/header/header', $data, false);
        $this->load->view('backend/body/body', $data, false);
        $this->load->view('backend/footer/footer', $data, false);

    }

}
