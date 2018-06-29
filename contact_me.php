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
	
	$to = $email;
	$subject = "gabrielepetteno.github.io - ".$email;
	$message = "Hi im ".$name."%0D%0AThis is my email : ".$email."%0D%0A This is my phone number : ".$phone."%0D%0A".$message;
	//$headers = 'From: gabri-pette@hotmail.it'."\r\n".'Reply-To: gabri-pette@hotmail.it'."\r\n".'X-Mailer: PHP/'.phpversion();

	$header = "From:".$email." \r\n";
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html\r\n";
	
	
	mail($email, $subject, $message, $headers);
	
	//echo "<a target=\"_top\" href=\"mailto:gabri-pette@hotmail.it\">@email@</a>";
	
	header("Location:http://gabrielepetteno.github.io");
	
	
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error';
}
?>