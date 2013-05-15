<?php
	session_start();
	unset($_SESSION['username']);
        unset($_SESSION['user_id']);
        unset($_SESSION['message']);
	session_destroy();
	header("Location:../index.php");
?>