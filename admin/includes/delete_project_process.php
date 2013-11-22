<?php 
  session_start();
  include("db_conn.php");
  $user_id = $_GET['id'];  
  $q = mysql_query("DELETE FROM `projects` WHERE `id` = '$user_id'");
  if($q){
    $_SESSION['message'] = "delete_project_success";
    header('Location: ../view_projects.php');
  }else{
    $_SESSION['message'] = "delete_event_failed";
    header('Location: ../view_projects.php');
  }
  ?>