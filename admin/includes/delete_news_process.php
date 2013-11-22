<?php 
  session_start();
  include("db_conn.php");
  $user_id = $_GET['id'];  
  $q = mysql_query("DELETE FROM `news` WHERE `id` = '$user_id'");
  if($q){
    $_SESSION['message'] = "delete_news_success";
    header('Location: ../view_news.php');
  }else{
    $_SESSION['message'] = "delete_news_failed";
    header('Location: ../view_news.php');
  }
  ?>