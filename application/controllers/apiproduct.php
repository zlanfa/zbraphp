<?php

class apiproduct extends CI_Controller
{

    //add watch list
    public function addwatchlist($postid)
    {
        //call model add watch list
        if (isset($postid)) {
            //load user from session
            //$this->load->library('session');
            try {
                $userid = 1; //$this->session->userdata('userid');
                $this->load->model('WatchList_model');
                $this->WatchList_model->save_watchlist($postid, $userid);

            } catch (Exception $err) {
                return false;
            }

            return true;
        }

        return false;
    }

    public function deleteWatchList($watchlistid)
    {
        if (isset($watchlistid)) {
            try {
                $this->load->model('WatchList_model');
                $this->WatchList_model->delete_watchlist($watchlistid);
            } catch (Exception $err) {
                return false;
            }
            return true;
        }
        return false;
    }

}
