<?php
	echo 'First Name: ' . $_POST['firstname'] . '<br>';
	echo 'Last Name: '  . $_POST['lastname'] . '<br>';
	echo 'Email: '      . $_POST['email'] . '<br>';
	echo 'Password: '   . md5($_POST['password']) . '<br>';

	$to = $_POST['email'];
	$subject = 'Your Registration';
	$message = 'Thank you, ' . $_POST['firstname'] . ' ' . $_POST['lastname'] . '!';
	$message .= 'Your registration is complete.';
	$from = 'utpbart@yahoo.com';
	$headers = 'From:' . $from;
	if (mail($to,$subject,$message,$headers)) 
	{
		echo 'Email sent to: ' . $to . '<br>';
	}
	else
	{
		echo 'Unable to send email at this time.';
	}
