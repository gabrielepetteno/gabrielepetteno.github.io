<?php
   echo "I write PHP code like a PRO! 
         Soon I'll be able to send out emails 
         using it as well.";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact form</title>
</head>
<body>
<h1>Contact us</h1>
<form method="POST">
    <label for="name">Name: <input type="text" name="name" id="name"></label><br>
    <label for="email">Email address: <input type="email" name="email" id="email"></label><br>
    <label for="message">Message: <textarea name="message" id="message" rows="8" cols="20"></textarea></label><br>
    <input type="submit" value="Send">
</form>
</body>
</html>