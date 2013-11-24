<?php
class News_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    public function get_news($order = 'DESC', $limit = '*', $offset = ''){
        $query = $this->db->query("SELECT * FROM `news` ORDER BY `id` $order LIMIT $limit , $offset");
        if($query->num_rows() > 0){
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }
    
    public function get_all_news(){
        $query = $this->db->get('news');
        if($query->num_rows() > 0){
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }
    
    public function get_news_by_id($id){
        $query = $this->db->query("SELECT * FROM `news` WHERE `id` = '$id'");
        if($query->num_rows() > 0){
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    } 

}