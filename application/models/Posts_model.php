<?php

/*
model post

method inside
1. get post model
2. save post
3. search post by id
4.

 */

class Posts_model extends CI_Model
{

    private $tableName;

    public function __construct()
    {
        //set table name
        $this->tableName = 'posts';
        $this->tableNameImage = 'postImage';
        $this->tableNameComment = 'postComment';
        $this->load->database();
    }

    /* post output required
    user : userid , fullname , avatar
    post : postid , *
     */

    public function get_post($postid = 0)
    {
        //case get post all
        if ($postid == 0) {

            $sql = "select * from posts p inner join user u on " .
                "(p.userid = u.userid) " .
                "order by p.postid desc ";
            $query = $this->db->query($sql);

        } else {
            //get post by id
            $sql = "select * from posts p inner join user u on " .
                "(p.userid = u.userid) " .
                "where p.postid = ? ";

            $query = $this->db->query($sql, array($postid));
        }

        return $query->result();
    }

    /*
    get all image from post id
    input : post id
    output : all data from postimage
     */
    public function get_post_image($postid)
    {
        if (isset($postid)) {
            $query = $this->db->get_where($this->tableNameImage, array('postID' => $postid));
            return $query->result();
        }
        return null;
    }

    /*
    get comment by post id and order by date time and post comment id

     */
    public function get_post_comment($postid, $orderby = 'asc')
    {
        if (isset($postid)) {
            if ($orderby != 'asc') {
                $orderby = 'desc';
            }
            $this->db->order_by('postCommentID', $orderby);
            $query = $this->db->get_where($this->tableNameComment, array('postID' => $postid));

            return $query->result();
        }
        return null;
    }

}
