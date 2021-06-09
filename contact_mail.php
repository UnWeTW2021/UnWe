<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
 {
      $firstname =   isset($_GET['name']) ? $_GET['name'] : die();
       $email =   isset($_GET['email']) ? $_GET['email'] : die();
       $tel=   isset($_GET['tel']) ? $_GET['tel'] : die();
       $mesaj=   isset($_GET['mesaj']) ? $_GET['mesaj'] : die();
    

       $to_email =$email;
    
     $subject = "Contact UnWe " . $firstname ;
$body = "Numarul de telefon asociat: " . $tel . "." . "\n" ."Mesajul este: " .$mesaj . ".";
$headers = "From: UnWe Team ";



$phpmailer = new PHPMailer(true);

try {
    //Server settings
                      //Enable verbose debug output
                                      //Send using SMTP
                          //Enable SMTP authentication
                              //SMTP password
       //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                               //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above


    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '567608174a57b4';
    $phpmailer->Password = 'db9c12c71f5a7b';

    //Recipients
    $phpmailer->setFrom('mailing@unwe.com', 'UnWe TEAM');
    $phpmailer->addAddress($to_email, $firstname);     //Add a recipient


    //Content
    $phpmailer->isHTML(true);                                  //Set email format to HTML
    $phpmailer->Subject = 'Here is the subject';
    $phpmailer->Body    = 'Numarul de telefon asociat: ' . $tel . "." . "\n" .'Mesajul este: '.$mesaj . '. ';
    $phpmailer->AltBody = 'This is the body in plain text for non-HTML mail clients, Numarul de telefon asociat: " . $tel . "." . "\n" ."Mesajul este: " .$mesaj . "."';

    $phpmailer->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$phpmailer->ErrorInfo}";
}

 
// if (mail($to_email, $subject, $body, $headers)) {
//     echo "Email successfully sent to $to_email...";
// } else {
//     echo "Email sending failed...";
// }
   




} 

   
?>