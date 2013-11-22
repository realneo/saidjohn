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
        $venue = mysql_escape_string($_POST['venue']);
        $date = mysql_escape_string($_POST['date']);
        $description = mysql_escape_string($_POST['description']);
        
        if($name == '' || $venue == '' || $date == '' || $description == ''){
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
                $upload->setDestination('events');
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
                $sets = "name = '".$name."', venue = '".$venue."', date = '".$date."', description = '".$description."'";
                if( $image )
                {
                    $sets .= ", image = '".$image."'";
                }
                
                $q = mysql_query("UPDATE events SET ".$sets." WHERE id = ".$id);
                if($q){
                    $info = '<h4 class="alert_success">Event was successfully updated</h4>';
                }else{
                   $errors = '<h4 class="alert_error">There was an error in adding a new project</h4>';
                }
            }
        }
    }
    else
    {
        $query = mysql_query("SELECT * FROM `events` WHERE `id` = '$id'");
        $dataEvent = array();
        while($row = mysql_fetch_array($query)){
            $dataEvent = array(
                'id'    => $row['id'],
                'name'  => $row['name'],
                'venue' => $row['venue'],
                'date'  => $row['date'],
                'description' => $row['description'],
                'image' => $row['image']
            );
        }
    }
            
?>
