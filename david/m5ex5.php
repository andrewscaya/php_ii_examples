<?php

require_once('TextFunctions.php');

$string = "Hello, World\n";

echo TextFunctions::changeCase($string, true);
echo TextFunctions::changeCase($string, false);

?>