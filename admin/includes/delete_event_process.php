<?php 
  session_start();
  include("db_conn.php");
  $user_id = $_GET['id'];  
  $q = mysql_query("DELETE FROM `events` WHERE `id` = '$user_id'");
  if($q){
    $_SESSION['message'] = "delete_event_success";
    header('Location: ../view_events.php');
  }else{
    $_SESSION['message'] = "delete_event_failed";
    header('Location: ../view_events.php');
  }
  ?>