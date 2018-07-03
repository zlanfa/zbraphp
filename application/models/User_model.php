<?php

/*
model user 

    method inside 
        1. get user model 
        2. save user
        3. search user by id
        4. 

*/

class ModelName extends CI_Model {

    private $tableName;

    public function __construct(){
        //set table name
        $this->tableName = 'user';
        $this->load->database();
    }

    //get user by id 
    public function get_user($id){
        //check id not null
        if(isset($id)){
            //query data 
            $query = $this->db->get_where($this->tableName,array('userid'=> $id));
            return $query->result();
        }
        return null;
    }


}


