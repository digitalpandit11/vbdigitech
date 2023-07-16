<?php
    $to = 'support@vidyutbazar.com';
    $name = $_REQUEST["name"];
    $email= $_REQUEST["email"];
    $mobile= $_REQUEST["mobile"];
    $sub= $_REQUEST["sub"];
    $message= $_REQUEST["message"];
    
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $subject = "You have a message from your VB Digitech.";

    $logo = 'img/logo.png';
    $link = '#';

    $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
    $body .= "<table style='width: 100%;'>";
    $body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
    $body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
    $body .= "</td></tr></thead><tbody><tr>";
    $body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
    $body .= "<td style='border:none;'><strong>Email:</strong> {$email}</td>";
    $body .= "</tr>";
    $body .= "<tr><td style='border:none;'><strong>Phone:</strong> {$mobile}</td></tr>";
    $body .= "<tr><td></td></tr>";
    $body .= "<tr><td colspan='2' style='border:none;'><strong>Subject:</strong>{$sub}</td></tr>";
     $body .= "<tr><td colspan='2' style='border:none;'><strong>Message:</strong>{$message}</td></tr>";
    $body .= "</tbody></table>";
    $body .= "</body></html>";

    $send = mail($to, $subject, $body, $headers);
    header('Location:contact.php');

?>
