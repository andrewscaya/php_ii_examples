<?php
ini_set('display_errors', 1);
//ini_set('error_reporting', E_ALL);
ini_set('error_reporting', E_STRICT);
$a = 12345;
$b = 99999;
$c = strcmp($a, $b);
if ($c == TRUE) {
    echo 'Whatever';
}
fopen($a, $b);

?>
