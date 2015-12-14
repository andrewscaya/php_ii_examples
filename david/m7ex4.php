<?php
if (isset($_COOKIE['theme'])) {
	$body_class = $_COOKIE['theme']; 
}

if (isset($_POST['theme-choice']))
{
	setcookie('theme', $_POST['theme-choice'], time()+3600);
	$body_class = $_POST['theme-choice'];
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Color Choice</title>
 		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body class="<?php echo $body_class; ?>">
		<form name="theme-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<fieldset>
				<legend class="<?php echo $body_class; ?>">Choose Theme</legend>
				<label for="theme">Select a theme:</label>
				<select name="theme-choice">
					<option value="light">Light</option>
					<option value="dark" <?php if ($body_class == 'dark') { echo 'selected="selected"'; } ?>">Dark</option>
				</select>
				<input type="submit" value="Select Theme" />
			</fieldset>
		<form>
	</body>
</html>