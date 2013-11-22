<?php
    include('db_conn.php');
    include('upload.php');
    
    $id = (int)$_GET['id'];
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

        if( !$errors )
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
                    exit();
                }
                else
                {
                    $uploadInfo = $upload->getInfo();
                    $image      = mysql_escape_string($uploadInfo['filename']);
                }
            }

            if( !$errors )
            {
                $sets = "name = '".$name."', brief = '".$brief."', description = '".$description."'";
                if( $image )
                {
                    $sets .= ", image = '".$image."'";
                }
                
                $q = mysql_query("UPDATE projects SET ".$sets." WHERE id = ".$id);
                if($q){
                    $info = '<h4 class="alert_success">Project was successfully updated</h4>';
                }else{
                   $errors = '<h4 class="alert_error">There was an error in adding a new project</h4>';
                }
            }
        }
    }
    else
    {
        $query = mysql_query("SELECT * FROM `projects` WHERE `id` = '$id'");
        $dataProject = array();
        while($row = mysql_fetch_array($query)){
            $dataProject = array(
                'id'    => $row['id'],
                'name'  => $row['name'],
                'brief' => $row['brief'],
                'description' => $row['description'],
                'image' => $row['image']
            );
        }
    }
            
?>
