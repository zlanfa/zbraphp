<?php

/*
model watchlist

for insert and get watchlist by user

 */

class WatchList_model extends CI_Model
{

    private $tableName;

    public function __construct()
    {
        //set table name
        $this->tableName = 'activityWatchlist';
        $this->load->database();
    }

    //get watchlist by user
    public function get_watchlist($userid)
    {

        //check userid
        if (isset($userid)) {
            //query data
            $query = $this->db->get_where($this->tableName, array('activityUserID' => $userid));
            return $query->result();
        }
        return null;
    }

    //save watchlist
    public function save_watchlist($postid, $userid)
    {
        //check postid and userid existing
        if (isset($postid) && (isset($userid))) {
            $data = array(
                'activityPostsID' => $postid,
                'activityUserID' => $userid,
                'activityWatchlistStatus' => 1,
                'dateCreate' => date('Y-m-d H:i:s'),
            );
            $this->db->insert($this->tableName, $data);
            return true;
        }
    }

    //delete watchlist out
    public function delete_watchlist($watchlistID)
    {
        //check postid and userid existing
        if (isset($postid) && (isset($userid))) {
            $data = array(
                'activityWatchlistStatus' => 0,
            );
            $this->db->where('activityID', $watchlistID);
            $this->db->update($this->tableName, $data);
            return true;
        }
    }

}
