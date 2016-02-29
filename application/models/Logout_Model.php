<?php
class Logout_Model extends CI_Model {
    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();    }

    public function logout () {
        $this->load->library('session');
        $this->session->sess_destroy();
 
    }   
}

?>