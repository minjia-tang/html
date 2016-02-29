<?php
class Login_Model extends CI_Model {
    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->database();           
    }

    public function loginAndLog ($user, $password) {
        $res['status'] = FALSE;
        $this->load->library('session');
        $encry_passwd = md5($password);
        $query_statement = "SELECT * FROM users WHERE email = '{$user}' AND password = '{$encry_passwd}'";
        $query = $this->db->query($query_statement);
        $results = $query->result();  
        //echo $query_statement;
        //print_r($results);
        if (count($results)>0) {
            $user_info = array(
                       'id'  => $results[0]->id,
                       'email'     => $results[0]->email,
                       'logged_in' => TRUE
                       );
            $this->session->set_userdata($user_info); 
            $res['data']=$results;   
            $tz = 'America/Chicago';
            $timestamp = time();
            $dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
            $dt->setTimestamp($timestamp); //adjust the object to correct timestamp
            $current_time = $dt->format('Y-m-d H:i:s');
            $insert_statement = "INSERT INTO user_logs (user_id, date_time) VALUES 
                                ('{$results[0]->id}',  '{$current_time}' )  ";
            $query = $this->db->query($insert_statement);                            
        }    
 
    }   
}

?>