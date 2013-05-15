<?php
    session_start();
    require_once("db_conn.php");
    //Getting Data from the form
    $user= mysql_real_escape_string($_POST['username']);
    $pass = mysql_real_escape_string($_POST['password']);
    // Checking if the username & Password exist in the database
    $q = mysql_query("SELECT * FROM users");
    while($q_row = mysql_fetch_array($q)){
        $username = $q_row['username'];
        $password = $q_row['password'];
        $user_id = $q_row['id'];
        if($user == $username && $pass == $password){
            $_SESSION['id'] = $user_id;
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header('Location: ../home.php');
            $_SESSION['message'] = "Successfuly Logged In";
            break;
        }else{
            $_SESSION['message'] = "Sorry! Username or Password is Incorrect";
            header('Location: ../index.php');
        }
    }
?>