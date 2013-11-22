<?php
    session_start();
    include('db_conn.php');
    
    // Getting values from the Form
    $intro = mysql_escape_string($_POST['intro']);
    
    $q = mysql_query("UPDATE `intro` SET `intro` = '$intro' WHERE `id` = '1'");
    if($q){
        $_SESSION['message'] = "sucess_intro_add";
        header("Location: ../intro_msg.php");
    }else{
       $_SESSION['message'] = "failed_intro_add";
       header("Location: ../intro_msg.php");
    }
            
?>
