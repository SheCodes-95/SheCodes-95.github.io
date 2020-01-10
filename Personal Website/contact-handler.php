<?php
 $name= $_POST['name'];
 $surname=$_POST['surname'];
 $visitor_email=$_POST['email'];
 $message=$_POST['message'];
 $email_from='tumelophela@outlook.com';
 $email_subject="New contact from submission";
 $email_body="User Name: $name.\n".
             "User Surname: $surname.\n".
             "User email: $email.\n".
             "User message: $message.\n";

$to="tumelophela@gmail.com";
$headers="From:  $email_from \r\n";
$headers .="Reply-To: $visitor_email \r\n";

mail($to, $email_subject,$email_body,$headers);
header("Location: contact.html") ;

?>
