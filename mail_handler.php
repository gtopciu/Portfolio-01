<?php
if(isset($_POST['submit'])) {
$name=$_POST['name']
$email=$_POST['email']
$phone=$_POST['phone']
$msg=$_POST['msg'];

$to='lostglory15@gmail.com';
$subject='Form Submission';
$message="Name: "$name. "\n"."Phone": ".$phone". "\n". "Wrote the following : "."\n\n".msg$;
$headers=From: ".$email";

if(mail($to, $subject, $message, $headers)) {
    echo"<h1>Sent Successfully! Thank you"." ".$name.", I will reply shortly!</h1>";
}
}
?>