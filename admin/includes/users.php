<?php
    require_once 'database.php';
    
    class Users{
        private $sql;
        
        public function all_users(){
            $this->$sql = "SELECT * FROM users";
            $database->query($sql);
        }
        
    }
?>
