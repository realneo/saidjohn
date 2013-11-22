<?php
    if($_POST)
    {
        // Getting values from the Form
        $content = mysql_escape_string($_POST['content']);
        
        $q = mysql_query("INSERT INTO `biography` (content) 
                           VALUES ('$content')");
        if($q){
            $info = 'Biography successfully added';
        }else{
           $error = 'Error';
        }
    }