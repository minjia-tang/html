<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Weather extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
	public function index()
	{
        $this->load->library('session');

        if ($this->session->userdata['logged_in']) {
            $this->load->model('Weather_Model');
            $res=$this->Weather_Model->getWeather("39.0997","-94.5783");
            if (!empty($res)) {
                $data = json_decode($res, true);
                $data['status'] = true;                   
            } else {
                $data['status'] = false; 
            }
            $this->load->view('weather_message', $data);                     
        } else {
            $this->load->helper('url');
            $home_url = base_url();
            redirect($home_url); 
        }
                       
	}
  
}
