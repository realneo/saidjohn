<?php
    session_start();
    include('db_conn.php');
    include('upload.php');
    
    $errors = '';
    $info   = '';
    if($_POST)
    {
        // Getting values from the Form
        $name = mysql_escape_string($_POST['name']);
        $brief = mysql_escape_string($_POST['brief']);
        $description = mysql_escape_string($_POST['description']);
        
        if($name == '' || $brief == '' || $description == ''){
            $errors = '<h4 class="alert_warning">One of the Field is Empty. Please fill them all</h4>';
        }

        if(!$errors)
        {
            // validate upload
            $image = '';
            if( $_FILES['image']['size'] )
            {
                $upload = new Upload;
                $upload->setRuleMime('image');
                $upload->setDestination('projects');
                $upload->setMaxSize(204800);

                if( !$upload->upload('image') )
                {
                    $errors = '<h4 class="alert_warning">'.$upload->getErrors().'</h4>';
                }
                else
                {
                    $uploadInfo = $upload->getInfo();
                    $image      = mysql_escape_string($uploadInfo['filename']);
                }
            }
            if(!$errors)
            {
                $q = mysql_query("INSERT INTO `projects` (`id`, `name`, `brief`, `description`, `image`) 
                                               VALUES ('NULL', '$name', '$brief', '$description', '$image')");
                if($q){
                    $info = '<h4 class="alert_success">A New Project was successfully added</h4>';
                }else{
                   $errors = '<h4 class="alert_error">There was an error in adding a new project</h4>';
                }
            }
        }
        
    }
            
?>
