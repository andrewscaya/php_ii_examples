<?php
$name = $_POST['name'];
$address = $_POST['address'];
?>
<!DOCTYPE html>
<head>
    <title>untitled</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="generator" content="Geany 1.25" />
</head>
<body>
<form method="post">
First/Middle/Last Name<input type="text" name="name[first]" />
<input type="text" name="name[middle]" />
<input type="text" name="name[last]" />
<br ><input type="email" name="name[email]" />
<br >Address:
<br ><input type="text" name="address[line1]" />
<br ><input type="text" name="address[line2]" />
<br >City: <input type="text" name="address[city]" />
<br >Postal Code: <input type="text" name="address[postalCode]" />
<br ><input type="submit" />
</form>
Welcome: <?php echo htmlspecialchars($name['first']); ?>
<?php phpinfo(INFO_VARIABLES); ?>
</body>
</html>
