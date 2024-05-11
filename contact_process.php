<?php
    // $to = 'ajaylondhe67@gmail.com';
    $to = 'amol@vbdigitech.com';
    $name = $_REQUEST["name"];
    $subject = "You have a message from VB Digitech.";
    $email= $_REQUEST["email"];
    $phone= $_REQUEST["phone"];
    $subjectssss= $_REQUEST["sub"];
    $messagesss= $_REQUEST["message"];
    
    $message = "<b>You have a message from VB Digitech.</b><br>";
    $message .= "<b>Name:</b> {$name}<br>";
    $message .= "<b>Email:</b> {$email}<br>";
    $message .= "<b>Phone:</b> {$phone}<br>";
    $message .= "<b>Subject:</b> {$subjectssss}<br>";
    $message .= "<b>Message:</b> {$messagesss}<br>";
 
    $header = "From:vbdigitech@gmail.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";

    $retval = mail ($to,$subject,$message,$header);
    header('Location:contact.php');

?>
