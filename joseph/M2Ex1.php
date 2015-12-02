<?php
$a = "1234";
$b = "5678";
echo "Errors on\r";
ini_set('display_errors', 1);
fopen($a,$b);
echo "Errors off\r";
ini_set('display_errors', 0);
fopen($a,$b);
