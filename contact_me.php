<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
try {
	$email = $_POST['email'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	
	$string = "mailto:gabri-pette@hotmail.it?subject=gabrielepetteno.github.io - ".$email."&body=Hi i'm ".$name."%0D%0AThis is my email : ".$email."%0D%0A This is my phone number : ".$phone."%0D%0A".$message;
	
	header("Location:$string");
	
	
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error';
}
?>