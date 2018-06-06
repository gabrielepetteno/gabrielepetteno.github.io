<?php
// Check for empty fields
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['message']) || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
   echo "No arguments Provided!";
   return false;
}
echo "WORK GOOD";

include_once("\Mail-1.4.1\Mail.php");

$from = $_POST['email'];
$to = 'gabrielepetteno@gmail.com';
$subject = 'Hi!';
$body = "Hi,\n\n Name: ".$_POST['name']." \n Email: ".$_POST['email']." \n Phone: ".$_POST['phone']." \n Message: ".$_POST['message'];

$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'gabrielepetteno.site@gmail.com',
        'password' => 'GpWebs1te1896!Git'
    ));

$mail = $smtp->send($to, $headers, $body);

echo "WORK GOOD 2";

if (PEAR::isError($mail)) {
    echo('<p>' . $mail->getMessage() . '</p>');
} else {
    echo('<p>Message successfully sent!</p>');
}

?>