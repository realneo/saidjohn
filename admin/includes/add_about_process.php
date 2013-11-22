<?php
    session_start();
    include('db_conn.php');
    
    // Getting values from the Form
    $about = mysql_escape_string($_POST['about_us']);
    
    $q = mysql_query("UPDATE `about_us` SET `about_us` = '$about' WHERE `id` = '1'");
    if($q){
        $_SESSION['message'] = "sucess_about_add";
        header("Location: ../about_page.php");
    }else{
       $_SESSION['message'] = "failed_about_add";
       header("Location: ../about_page.php");
    }
            
?>
