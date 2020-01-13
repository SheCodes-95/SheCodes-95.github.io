 <?php
 if(isset($_POST['submit'])){
 $name= $_POST['name'];
 $surname=$_POST['surname'];
 $user_email=$_POST['email'];
 $user_message=$_POST['message'];


$email_from='tumelophela@gmail.com';
$email_subject="New Form Submission";
$email_body="Name: $name.\n".
             "Surname: $surname.\n".
              "Email address: $user_email.\n".
               "Message: $user_message.\n";

$to_email="tumelophela@outlook.com";
$headers="From: $email_from\r\n";
$headers .="Reply-to: $user_email\r\n";

$secretKey="6Lfoys4UAAAAAPNwZ2zHagaY3lRy1M_85xQd36Lh";
$responseKey=$_POST['g-recaptcha-respose'];
$UserIP=$_SERVER['REOMTE_ADDR'];
$url="https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response==$responseKey&remoteip=$UserIP";

$response= file_gets_contents($url);
$response= json_decode($response);

if($response-> success){
  mail($to_email, $email_subject, $email_body, $headers );
  echo "Message sent successfully.";

}
else{
  echo "<span>Invalid captcha, Please Try Again</span>";
}

}


?>
