<?php

	if(isset($_POST['submit'])) {
		$name=$_POST['name'];
		$subject=$_POST['subject'];
		$email=$_POST['mail'];
		$msg=$_POST['message'];

		$mailTo='lostglory15@gmail.com'; 
        $headers = "From: ".$mailFrom;
        $txt = "You have received an E-mail from ".$name.".\n\n".$message;

mail($mailTo, $subject, $txt, $headers);
header("Location: index.php?mailsend");
?>