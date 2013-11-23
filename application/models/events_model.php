<?php
class Events_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    public function get_events($order = 'DESC', $limit = '*', $offset = ''){
        $query = $this->db->query("SELECT * FROM `events` ORDER BY `id` $order LIMIT $limit , $offset");
        if($query->num_rows() > 0){
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

}