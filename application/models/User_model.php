<?php

/*
model user

method inside
1. get user model
2. save user
3. search user by id
4.

 */

class ModelName extends CI_Model
{

    private $tableName;

    public function __construct()
    {
        //set table name
        $this->tableName = 'user';
        $this->load->database();
    }

    //get user by id
    public function get_user($id)
    {
        //check id not null
        if (isset($id)) {
            //query data
            $query = $this->db->get_where($this->tableName, array('userid' => $id));
            return $query->result();
        }
        return null;
    }

    //get user by username
    public function get_userByUsername($username)
    {
        //check id not null
        if (isset($username)) {
            //query data
            $query = $this->db->get_where($this->tableName, array('username' => $username));
            return $query->result();
        }
        return null;
    }

    //save user
    public function save_normalUser($username, $password, $fullname, $address,
        $telephone, $province, $lineid, $facebook) {
        $data = array(
            'username' => $username,
            'password' => $password,
            'fullname' => $fullname,
            'address' => $address,
            'telephone' => $telephone,
            'province' => $province,
            'lineid' => $lineid,
            'facebook' => $facebook,
            'status' => 1,
            'dateCreate' => date('Y-m-d H:i:s'),
            'dateUpdate' => date('Y-m-d H:i:s'),
        );

    }

    //save facebook
    public function save_facebookUser($id, $fullname)
    {
        if (isset($id) && isset($fullname)) {
            $data = array(
                'username' => $id,
                'fullname' => $fullname,
                'status' => 1,
                'dateCreate' => date('Y-m-d H:i:s'),
                'dateUpdate' => date('Y-m-d H:i:s'),
            );

            $this->db->insert($this->tableName, $data);
            return true;
        }

    }

}
