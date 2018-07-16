<?php

class register extends CI_Controller
{

    private function loadDefaultPage($data)
    {
        //go to page register
        $this->load->view('header/header', $data, false); //load header
        $this->load->view('authen/register', $data, false);
        $this->load->view('footer/footer', $data, false); //load footer
    }

    public function index()
    {
        $data = [];
        $data['jwt'] = getCookieJWT($this, $this->input->cookie('auth'));
        $this->loadDefaultPage($data);

    }

    public function loginWithOwnApp()
    {
        $data['jwt'] = getCookieJWT($this, $this->input->cookie('auth'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required|valid_email', array('valid_email' => 'กรุณาตรวจสอบอีเมล์ของคุณ'));
        $this->form_validation->set_rules('password', 'Password', 'required',
            array('required' => 'กรุณากรอกรหัสผ่าน'));

        if ($this->form_validation->run() == false) {
            //go to page register
            $this->loadDefaultPage($data);
        } else {
            //check login and redirect to home page
            $username = $this->input->post('username'); //get username post
            $password = $this->input->post('password'); //get password post

            $jwt = $this->Authen_model->login($username, $password);
            if ($jwt != null) {
                //can login set cookies
                $cookie = array(
                    'name' => 'auth',
                    'value' => $jwt,
                    'expire' => '3600',
                );

                $this->input->set_cookie($cookie);
                //redirect to home page
                redirect('/home', 'refresh');
            } else {
                $data['error'] = 'กรุณาตรวจสอบ อีเมล์หรือรหัสผ่านของคุณ';
                $this->loadDefaultPage($data);
            }

        }

    }

    public function registerFacebook()
    {
        var_dump($this->input->post('id'));
    }

    public function logout()
    {
        delete_cookie('auth');
        redirect('/home', 'refresh');
    }

}
