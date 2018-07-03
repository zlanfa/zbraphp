<?php
/*
model category 

    method inside 
        1. get category model 
        2. save category
        3. search category by id

*/
        
class Categories_model extends CI_Model {

    private $tableName;

    public function __construct(){

        //set table name
        $this->tableName = 'category';
        $this->load->database();
    }


    //1. get category
    public function get_categories($id = 0){
        $result;
        if($id == 0){
            //case get all category
            $query = $this->db->get($this->tableName);
            $result = $query->result();
           
        }else{
            //case get category by id 
            $query = $this->db->get_where($this->tableName,array('categoryID'=> $id));
            $result = $query->result();
        }
        
        return $result;
    }

}


