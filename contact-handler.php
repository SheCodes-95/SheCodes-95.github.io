<?php
 if(isset($_POST['submit'])){
 $name= $_POST['name'];
 $surname=$_POST['surname'];
 $mailFrom=$_POST['mail'];
 $message=$_POST['message'];


$mailTo="tumelophela@outlook.com";
$headers="From: ".$mailFrom;
$txt="You have received an e-mail from ".$name.".\n\n".$message;


mail($mailTo, $name, $surname, $txt, $headers );
header("Location: contact.html") ;


}
?>
