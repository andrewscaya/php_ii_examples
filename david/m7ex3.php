<?php
require_once('Form.php');

$newForm = new Form('registration', 'processForm.php');
$newForm->textInput('First Name', 'firstname');
$newForm->textInput('Last Name', 'lastname');
$newForm->emailInput('Email', 'email');
$newForm->passwordInput('Password', 'password');
$newForm->submitButton('Register');

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Registration Form</title>
 		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php echo $newForm->getForm(); ?>
	</body>
</html>

