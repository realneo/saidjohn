<?php
class Users_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    public function get_all_users()
    {
        $query = $this->db->get('users');
        if($query->num_rows() > 0){
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }
    
    public function get_news_by_id($id)
    {
        $query = $this->db->query("SELECT * FROM `users` WHERE `id` = '$id'");
        if($query->num_rows() > 0){
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }
    
    public function check_user($username){
        $query = $this->db->query("SELECT * FROM `users` WHERE `username` = '$username'");
        
        if($query->num_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
    
    public function add_new_user()
    {
        $data = array(
            'username' => $this->input->post('username', TRUE),
            'password' => $this->encrypt->encode($this->input->post('password', TRUE)),
            'first_name' => $this->input->post('first_name', TRUE),
            'last_name' => $this->input->post('last_name', TRUE)
            );
        if($this->check_user($data['username']) == FALSE)
        {
            $this->db->insert('users', $data); 
        }
        else
        {
            // Supposed to echo out the error
        }

	
    }  

}