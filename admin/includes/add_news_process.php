<?php
    session_start();
    include('db_conn.php');
    
    $errors = '';
    $info   = '';
    if($_POST)
    {
        // Getting values from the Form
        $name = mysql_escape_string($_POST['name']);
        $brief = mysql_escape_string($_POST['brief']);
        $date = mysql_escape_string($_POST['date']);
        $description = mysql_escape_string($_POST['description']);
        
        if($name == '' || $brief == '' || $date == '' || $description == ''){
            $errors = '<h4 class="alert_warning">One of the Field is Empty. Please fill them all</h4>';
        }
        
        if(!$errors)
        {
            $q = mysql_query("INSERT INTO `news` (`id`, `name`, `brief`, `date`, `description`) 
                                           VALUES ('NULL', '$name', '$brief', '$date', '$description')");
            if($q){
                $info = '<h4 class="alert_success">The News update was successfully added</h4>';
            }else{
               $errors = '<h4 class="alert_error">There was an error in adding a new project</h4>';
            }
        }
    }
            
?>
