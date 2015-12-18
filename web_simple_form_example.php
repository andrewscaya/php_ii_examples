<!DOCTYPE html>
<head>
    <title>untitled</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="generator" content="Geany 1.25" />
</head>
<body>
<form method="post">
Address: <input type="text" name="address" />
<br>Number 1: <input type="number" name="number1" />
<br>Number 2: <input type="text" name="number2" />
<br><input type="submit" />
</form>
<?php if (isset($_POST['number2'])) : ?>
<br><?php echo (preg_match('/^\d+$/', $_POST['number2'])) ? 'NUMERIC DATA' : 'NON-NUMERIC DATA'; ?>
<!-- NOTE: no begin (^) or end ($) symbols: -->
<br><?php echo (preg_match('/\d+/', $_POST['number2'])) ? 'NUMERIC DATA' : 'NON-NUMERIC DATA'; ?>
<br><?php var_dump($_POST['number2']); ?>
<?php endif; ?>
<?php phpinfo(INFO_VARIABLES); ?>
</body>
</html>
