<?php
class Projects_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    public function get_projects($order = 'DESC', $limit = '*', $offset = ''){
        $query = $this->db->query("SELECT * FROM `projects` ORDER BY `id` $order LIMIT $limit , $offset");
        if($query->num_rows() > 0){
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }
    
    public function get_all_projects(){
        $query = $this->db->get('projects');
        if($query->num_rows() > 0){
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }
    
    public function get_project_by_id($id){
        $query = $this->db->query("SELECT * FROM `projects` WHERE `id` = '$id'");
        if($query->num_rows() > 0){
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }   

}