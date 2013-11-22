<?php
    ob_start();
    session_start();
    include('db_conn.php');
    
    // Getting values from the Form
    $donate = $_POST['donate'];
        
    $q = mysql_query("UPDATE `donate` SET `donate` = '$donate' WHERE `id` = '1'");
    if($q){
        $_SESSION['message'] = "sucess_about_add";
        header("Location: ../donate.php");
    }else{
       $_SESSION['message'] = "failed_about_add";
       header("Location: ../donate.php");
    }
    ob_flush();
    
?>
