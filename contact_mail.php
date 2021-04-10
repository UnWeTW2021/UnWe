<?php

if ( isset( $_GET['submit'] ) ) {
      $firstname = $_GET['name'];
       $email = $_GET['email'];
       $tel= $_GET['tel'];
       $mesaj= $_GET['mesaj']; 
    

       $to_email =$email;
    
     $subject = "Contact UnWe " . $firstname ;
$body = "Numarul de telefon asociat: " . $tel . "." . "\n" ."Mesajul este: " .$mesaj . ".";
$headers = "From: UnWe Team ";
 
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
    } 

   
?>