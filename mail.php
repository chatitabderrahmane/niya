<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

function generatePassword() {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#*!$%^&";
    $password = "";
    for ($i = 0; $i < 8; $i++) {
        $password .= $chars[rand(0, strlen($chars)-1)];
    }
    return $password;
}

function SendPersMail($email, $subject, $message){
    $mail = new PHPMailer(true);
    try{
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'niyaproj@gmail.com';
        $mail->Password = 'kpcwditlyxdvalzm';
        $mail->SMTPSecure = "tls";
        $mail->Port = '587';
    
        $mail->setFrom('niyaproj@gmail.com');
        $mail->addAddress($email);
    
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->send();
    
       // echo "Message send successfully ";
    
    
    }catch(Exception $e){
        echo "Error : $e";
    }

}




?>