<?php
    ob_start();
    session_start();
    include('db_conn.php');
    
    // Getting values from the Form
    $volunteer = $_POST['volunteer'];
        
    $q = mysql_query("UPDATE `volunteer` SET `volunteer` = '$volunteer' WHERE `id` = '1'");
    if($q){
        $_SESSION['message'] = "sucess_about_add";
        header("Location: ../volunteer.php");
    }else{
       $_SESSION['message'] = "failed_about_add";
       header("Location: ../volunteer.php");
    }
    ob_flush();
    
?>
