<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\PHPMailer-master/src/Exception.php';
require 'C:\xampp\htdocs\PHPMailer-master/src/PHPMailer.php';
require 'C:\xampp\htdocs\PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer(true);                              
try {
    
    $mail->SMTPDebug = 2;                                 
    $mail->isSMTP();                                      
    $mail->Host = 'smtp.gmail.com';                  
    $mail->SMTPAuth = true;                               
    $mail->Username = 'arpita.rao@somaiya.edu';             
    $mail->Password = 'qouw jjsv rfel lmru';                           
    $mail->SMTPSecure = 'tls';                            
    $mail->Port = 587;              
    $mail->addAttachment('C:\xampp\htdocs\1.jpg');         
    $mail->setFrom('arpita.rao@somaiya.edu', 'Arpita Rao');          
    $mail->addAddress('somaan.a@somaiya.edu'); 
    $mail->isHTML(true);                                  
    $mail->Subject = 'WP2 Experiment 6';
    $mail->Body    = 'This mail is sent using php with an attachment';
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>