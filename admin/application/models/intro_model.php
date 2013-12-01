<?php
    class Intro_model extends CI_Model {

        function __construct()
        {
            // Call the Model constructor
            parent::__construct();
        }


        public function get_intro()
        {
            $query = $this->db->get('intro');
            if($query->num_rows() > 0){
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
        }
        
        
        public function modify_intro($intro)
        {
            $data = array('intro' => $intro);
            
            $this->db->update('intro', $data);
            $this->db->where('id', 1);

        }

    }