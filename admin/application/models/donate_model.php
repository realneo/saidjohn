<?php
    class Donate_model extends CI_Model {

        function __construct()
        {
            // Call the Model constructor
            parent::__construct();
        }


        public function get_donate()
        {
            $query = $this->db->get('donate');
            if($query->num_rows() > 0){
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
        }

    }