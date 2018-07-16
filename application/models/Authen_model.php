<?php

use Firebase\JWT\JWT;

class Authen_model extends CI_Model
{

    private $tableName;
    private $key;
    private $token;

    public function __construct()
    {

        $this->tableName = 'user';
        $this->key = 'example_key';
        $this->load->database();
    }

    //login own server
    public function login($email, $password)
    {
        //check email and password from database
        if (isset($email) && isset($password)) {
            $query = $this->db->get_where($this->tableName, array('username' => $email, 'password' => $password));
            $result = $query->result();
            //set data to payload
            if (count($result) > 0) {
                $token = array(
                    'iss' => 'http://dookonka.com',
                    'userid' => $result[0]->userid,
                    'iat' => 1356999524,
                    'nbf' => 1357000000,
                );
                //encode token
                $jwt = JWT::encode($token, $this->key);
                return $jwt;
            }
            return null;

        }
        return null;

    }

    //get jwt decode from cookies
    public function decodeCookieJWT($jwt)
    {
        if (isset($jwt)) {
            //decode jwt to array object
            $decoded = JWT::decode($jwt, $this->key, array('HS256'));
            return $decoded;
        } else {
            return null;
        }

    }

}
