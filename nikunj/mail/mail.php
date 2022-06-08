<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login system with otp</title>
</head>
<body>

<form method="POST">

Email<input type="text" name="username" value="" required/>
<input type="submit" name="btnsubmit" value="submit" onclick="ShowHideDiv(this)"/>

</form>

</body>
</html>

<?php

include 'connection.php' ;

if(isset($_POST['btnsubmit'])){

    $to_email = $_POST['username'];
    $subject = "nikx password";
    $otp = rand();
    $headers = "From: ghogharinikunj97@gmail.com";
    
 ?>