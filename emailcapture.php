<?php
if( isset(isset($_POST['e'])){
	// HINT: use preg_replace() to filter the data
	$e = $_POST['e'];
	
	$to = "dwdevs@dwdevelops.com";	
	$from = $e;
	$subject = 'Captured Email';
	$message = '<b>Email:</b> '.$e.';
	$headers = "From: Email Sign-up";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	if( mail($to, $subject, $message, $headers) ){
		echo "success";
	} else {
		echo "The server failed to send the message. Please try again later.";
	}
}
?>