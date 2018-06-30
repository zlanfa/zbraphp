<?php

/*
model post 

    method inside 
        1. get post model 
        2. save post
        3. search post by id
        4. 

*/

class Posts_model extends CI_Model {

    private $tableName;

    public function __construct(){
        //set table name
        $this->tableName = 'posts';
        $this->load->database();
    }

    /* post output required
        user : userid , fullname , avatar
        post : postid , *
    */

    public function get_post($id = 0){
        $result = []; //keep array
        //case get post all
        if($id == 0){
            
            $sql = "select * from posts p inner join user u on ".
                   "(p.userid = u.userid) ".
                   "order by p.postid desc ";
            $query = $this->db->query($sql);
            
        }else{
            //get post by id 
            $sql = "select * from posts p inner join user u on ".
                   "(p.userid = u.userid) ".
                   "where p.postid = ? ";
            
            $query = $this->db->query($sql, array($id));
        }

        return $query->result();
    }


}


