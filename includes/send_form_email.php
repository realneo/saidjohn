<?php
session_start();
// This function checks for email injection. Specifically, it checks for carriage returns - typically used by spammers to inject a CC list.
function isInjected($str) {
	$injections = array('(\n+)',
	'(\r+)',
	'(\t+)',
	'(%0A+)',
	'(%0D+)',
	'(%08+)',
	'(%09+)'
	);
	$inject = join('|', $injections);
	$inject = "/$inject/i";
	if(preg_match($inject,$str)) {
		return true;
	}
	else {
		return false;
	}
}

// Load form field data into variables.
$email_address = $_REQUEST['email'] ;
$comments = $_REQUEST['message'] ;

// If the user tries to access this script directly, redirect them to feedback form,
if (!isset($_REQUEST['email'])) {
$_SESSION['msg'] = 'Please insert your Email Address.';
header( "Location: ../contact_us.php" );
}

// If the form fields are empty, redirect to the error page.
elseif (empty($email_address) || empty($comments)) {
$_SESSION['msg'] = 'Please Fill in all the Fields.';
header( "Location: ../contact_us.php" );
}

// If email injection is detected, redirect to the error page.
elseif ( isInjected($email_address) ) {
	$_SESSION['msg'] = 'The Email Address is not Correct';
header( "Location: ../contact_us.php" );
}

// If we passed all previous tests, send the email!
else {
mail( "neo@yoteyote.com", "Message From The Website",
  $comments, "From: $email_address" );
	$_SESSION['msg'] = 'Jazakallahu Kheir. We will get back to you soon InshaAllah.';
header( "Location: ../contact_us.php" );
}
?>