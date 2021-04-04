<?php

if ( isset( $_POST['submit'] ) ) {
      $firstname = $_POST['name'];
       $email = $_POST['email'];
       $tel= $_POST['tel'];
       $mesaj= $_POST['mesaj']; 
    
       echo $firstname;
       echo $email;
       echo $tel;
       echo $mesaj;

       $to_email =$email;
       echo $to_email;
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