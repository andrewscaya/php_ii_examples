<?php
require_once('Form.php');

session_start();

if (isset($_SESSION['email']))
{
	$greeting = 'Welcome, ' . $_SESSION['email'] . '!';
}
else 
{
	$greeting = 'Please log in.';
} 

$newForm = new Form('login', 'account.php');
$newForm->emailInput('Email', 'email');
$newForm->passwordInput('Password', 'password');
$newForm->submitButton('Login');

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Registration Form</title>
 		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<header><?php echo $greeting; ?></header>
		<?php 
			if (isset($_SESSION['email']))
			{
				echo "<a href='logout.php'>Log out</a>";
			}
			else
			{
				echo $newForm->getForm();
			}
		?>
	</body>
</html>