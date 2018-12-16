<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer;
use PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->setFrom('booking@approachconsulting.ca', 'Your Name');
    $mail->addAddress('matt.iakhno@gmail.com', 'My Friend');
    $mail->Subject  = 'First PHPMailer Message';
    $mail->Body     = 'Hi! This is my first e-mail sent through PHPMailer.';                              // TCP port to connect to

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->send();
    echo 'Message has been sent';
    return true;
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    return false;
}
?>
