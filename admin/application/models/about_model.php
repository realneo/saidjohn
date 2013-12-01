<?php
    class About_model extends CI_Model {

        function __construct()
        {
            // Call the Model constructor
            parent::__construct();
        }


        public function get_about()
        {
            $query = $this->db->get('about_us');
            if($query->num_rows() > 0){
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
        }
        
        public function modify_about($about)
        {
            $data = array('about_us' => $about);
            
            $this->db->update('about_us', $data);
            $this->db->where('id', 1);
            
        }

    }