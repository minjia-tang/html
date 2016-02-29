<?php
class UserLogs_Model extends CI_Model {
    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->database();           
    }

    public function getUserLogs () {
        $query_statement = "SELECT count(ul.user_id) as total, ul.*, u.email FROM user_logs ul, users u WHERE ul.user_id=u.id GROUP BY ul.user_id ORDER BY total DESC";
        $query = $this->db->query($query_statement);
        $results = $query->result(); 
        return json_encode($results);         

    }   
}

?>