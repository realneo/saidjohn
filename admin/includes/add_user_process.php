<?php
    session_start();
    include('db_conn.php');
    
    // Getting values from the Form
    $username = mysql_escape_string($_POST['username']);
    $password = mysql_escape_string($_POST['password']);
    
    if($username == '' || $password == ''){
        $_SESSION['message'] = "empty_user_add";
        header("Location: ../add_user.php");
        break;
    }
    
    $q = mysql_query("INSERT INTO `users` (`id`, `username`, `password`) 
                                   VALUES ('NULL', '$username', '$password')");
    if($q){
        $_SESSION['message'] = "sucess_user_add";
        header("Location: ../add_user.php");
    }else{
       $_SESSION['message'] = "failed_user_add";
       header("Location: ../add_user.php");
    }
            
?>
