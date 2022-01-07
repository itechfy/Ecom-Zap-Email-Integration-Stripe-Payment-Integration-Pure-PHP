<?php

if(isset($_POST['submit'])){

$to = "trademark@ecom-zap.com";
$subject = "Contact";
$name=$_POST['name'];
$email = $_POST['email'];
$m = $_POST['msg'];

$message = "
<html>
<head>
<title>$subject</title>
</head>
<body>
<strong>From $name</strong>
</br>
</br>
<p>$m</p>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'.$email.'>' . "\r\n";
$headers .= 'Cc: info@ecom-zap.com' . "\r\n";

mail($to,$subject,$message,$headers);
header('Location:success.php');
}
else{
 
}
?>