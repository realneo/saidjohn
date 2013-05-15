<?php
    session_start();
    
    // Get values from the Form
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Checking if it exists in the database
    $q = mysql_query("SELECT * FROM `users` WHERE `username` = '$username' & `password` = '$password'");
    while($row = mysql_fetch_array($q)){
        $db_username = $row['username'];
        $db_password = $row['password'];
        $db_user_id = $row['id'];
        
        if(!$db_user_id){
            $_SESSION['message'] = "Sorry the Username or Password does not exist";
            header('Location: ../home.php');
        }else{
            $_SESSION['username'] = $db_username;
            $_SESSION['user_id'] = $db_user_id;
            header('Location: ../home.php');
        }
    }
?>
