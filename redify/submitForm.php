<?php 
	$name = $_GET["name"];
	$email = $_GET['email'];
	$message = $_GET['message'];

	$msg = "From: " . $name . " (" . $email . ") <br> Message: " . $message;

	mail("assiamoujdi@gmail.com", "New REDify Message", $msg);

	header("Location: confirmed.html");
?>