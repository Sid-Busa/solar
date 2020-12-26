<?php
	$to = "service@greenearthsolar.in";
	$subject = 'Become Dealer';
	$from = $_POST['email'];
	 
	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	 
	// Create email headers
	$headers .= 'From: '.$from."\r\n".
	    'Reply-To: '.$from."\r\n" .
	    'X-Mailer: PHP/' . phpversion();
	 
	// Compose a simple HTML email message
	$message = '<html><body>';
	$message .= '<h1 style="color:#f40;">User is contact throught contact form</h1>';
	$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
	$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr";
	$message .= "<tr style='background: #eee;'><td><strong>Organization:</strong> </td><td>" . strip_tags($_POST['Organization']) . "</td></tr";
	$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
	$message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
	$message .= "<tr><td><strong>City:</strong> </td><td>" . strip_tags($_POST['city']) . "</td></tr>";
	$message .= "<tr><td><strong>District:</strong> </td><td>" . strip_tags($_POST['district']) . "</td></tr>";
	$message .= "<tr><td><strong>State:</strong> </td><td>" . strip_tags($_POST['state']) . "</td></tr>";
	$message .= "<tr><td><strong>Country:</strong> </td><td>" . strip_tags($_POST['country']) . "</td></tr>";
	$message .= "<tr><td><strong>Message:</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";
	$message .= "</table>";
	$message .= '</body></html>';
	 
	// Sending email
	if(mail($to, $subject, $message, $headers)){
	    echo 'Your mail has been sent successfully.';
	} else{
	    echo 'Unable to send email. Please try again.';
	}
?>