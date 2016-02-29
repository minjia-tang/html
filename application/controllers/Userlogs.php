<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userlogs extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
	public function index()
	{
        $this->load->library('session');

        $this->load->model('UserLogs_Model');
        $res=$this->UserLogs_Model->getUserLogs();
        //print_r(json_decode($res, true));
        $data['users'] = json_decode($res, true);
        /*
        if (!empty($res)) {
            $data = json_decode($res, true);
            $data['status'] = true;                   
        } else {
            $data['status'] = false; 
        }
        */
        $this->load->view('userlogs_message', $data);                     

                       
	}
  
}
