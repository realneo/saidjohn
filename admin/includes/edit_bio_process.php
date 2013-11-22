<?php
    $id = (int)$_GET['id'];
    if($_POST)
    {
        // Getting values from the Form
        $content = mysql_escape_string($_POST['content']);
        
        $q = mysql_query("UPDATE `biography` SET content = '$content' WHERE id = $id");
        if($q){
            $info = 'Biography successfully updated';
        }else{
           $error = 'Error';
        }
    }