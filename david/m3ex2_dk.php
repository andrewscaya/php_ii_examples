<?php

$a = true;
$b = false;

switch ($a || $b) {
	case true:
		echo "OK";
		break;
	case false:
		echo "Not OK";
		break; 
}

?>