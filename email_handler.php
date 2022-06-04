<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$message=$_POST['message'];

		$to= 'emmanuelowino96@gmail.com'; 
		$subject = @trim(stripslashes($_POST['subject']));
		$message = @trim(stripslashes($_POST['message'])); 
		$body ='Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "Message Sent Successfully!";
		}
		else{
			echo "Something went wrong!Please try again";
		}
	}
?>