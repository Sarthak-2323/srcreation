<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailTo = 'sarthak0723@gmail.com';

$email_subject = 'New Form Submition';

$email_body = "User Name: $name.\n".
                "User email: $visitor_email.\n".
                  "Subject: $subject.\n".
                  "User Message: $message .\n";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($mailTo,$email_subject,$email_body,$headers);

$headers = "From: " .$name . "<". $message . ">";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$result = mail($mailTo,$email_subject,$email_body,$headers);
 
   //error checking
   if($result) {
    $success = "The message was sent successfully!";
   } else {
    $failed = "Error: Message was not sent, Try again Later";
   }
}
 
?>
