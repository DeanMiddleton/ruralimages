<?php


if( isset($_POST['custName']) && isset($_POST['custEmail']) && isset($_POST['custPassword']) ){
	$custName = $_POST['custName']; // HINT: use preg_replace() to filter the data
    $custEmail = $_POST['custEmail'];
    $custPassword = $_POST['custPassword'];
	$to = "dean@deanmiddleton.co.uk";	
	$from = $custEmail;
	$subject = 'Contact Form Message';
	$message = '<b>Name:</b> '.$custName.' <br><b>Telephone:</b> '.$custEmail.' <br><b>Password:</b> '.$custPassword;
	$headers = "From: $from\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	if( mail($to, $subject, $message, $headers) ){
		echo "success";
	} else {
		echo "The server failed to send the message. Please try again later.";
	}
}
?>