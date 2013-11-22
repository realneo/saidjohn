<?php
    session_start();
    include('db_conn.php');
    
    $id = (int)$_GET['id'];
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
            $sets = "name = '".$name."', brief = '".$brief."', date = '".$date."', description = '".$description."'";
            $q = mysql_query("UPDATE news SET ".$sets." WHERE id = ".$id);
            if($q){
                $info = '<h4 class="alert_success">The News successfully updated</h4>';
            }else{
               $errors = '<h4 class="alert_error">There was an error in adding a new project</h4>';
            }
        }
    }
    else
    {
        $query = mysql_query("SELECT * FROM `news` WHERE `id` = '$id'");
        $dataNews = array();
        while($row = mysql_fetch_array($query)){
            $dataNews = array(
                'id'    => $row['id'],
                'name'  => $row['name'],
                'brief' => $row['brief'],
                'date'  => $row['date'],
                'description' => $row['description']
            );
        }
    }
            
?>
