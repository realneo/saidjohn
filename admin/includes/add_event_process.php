<?php
    session_start();
    include('db_conn.php');
    include('upload.php');
    
    // Getting values from the Form
    $name = mysql_escape_string($_POST['name']);
    $venue = mysql_escape_string($_POST['venue']);
    $date = mysql_escape_string($_POST['date']);
    $description = mysql_escape_string($_POST['description']);
    
    if($name == '' || $venue == '' || $date == '' || $description == ''){
        $_SESSION['message'] = "empty_event_add";
        header("Location: ../events.php");
        break;
    }

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
            header("Location: ../events.php");
            exit();
        }
        else
        {
            $uploadInfo = $upload->getInfo();
            $image      = mysql_escape_string($uploadInfo['filename']);
        }
    }
    
    $q = mysql_query("INSERT INTO `events` (`id`, `name`, `venue`, `date`, `description`, `image`) 
                                   VALUES ('NULL', '$name', '$venue', '$date', '$description', '$image')");
    if($q){
        $_SESSION['message'] = "sucess_event_add";
        header("Location: ../events.php");
    }else{
       $_SESSION['message'] = "failed_event_add";
       header("Location: ../events.php");
    }
            
?>
