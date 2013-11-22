<?php
if($_POST)
{
    $errors = '';
    $mailInfo = '';
    
    $name   = filter_var($_POST['fullname'], FILTER_SANITIZE_STRING);
    $email  = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $mobile = filter_var($_POST['mobile'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    if( !$name || !$email || !$mobile || !$message )
    {
        $errors = 'Form not complete';
    }

    if( !filter_var($email, FILTER_VALIDATE_EMAIL) )
    {
        $errors = 'Email format not valid';
    }

    if( !$errors )
    {
        // send mail
        require 'phpmailer/class.phpmailer.php';

        $mail = new PHPMailer();
        $mail->IsSendmail();
        $mail->SetFrom('neo@yoteyote.com', 'Admin');
        $mail->AddAddress($email, $name);
        $mail->Subject = 'Testing Email';
        $mail->MsgHTML(nl2br($message));

        if(!$mail->Send()) {
          $mailInfo =  "Mailer Error: " . $mail->ErrorInfo;
        } else {
          $mailInfo = "Message sent!";
        }
    }
}