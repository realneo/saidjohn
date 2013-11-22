<?php 
  session_start();
  include("db_conn.php");
  $user_id = $_GET['id'];  
  $q = mysql_query("DELETE FROM `users` WHERE `id` = '$user_id'");
  if($q){
    $_SESSION['message'] = "delete_user_success";
    header('Location: ../view_users.php');
  }else{
    $_SESSION['message'] = "delete_user_failed";
    header('Location: ../view_users.php');
  }
  ?>