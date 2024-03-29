<?php
    class Biography_model extends CI_Model {

        function __construct()
        {
            // Call the Model constructor
            parent::__construct();
        }


        public function get_bio()
        {
            $query = $this->db->get('biography');
            if($query->num_rows() > 0){
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
        }
        
        public function modify_bio($bio)
        {
            $data = array('content' => $bio);
            
            $this->db->update('biography', $data);
            $this->db->where('id', 1);
            
        }


    }