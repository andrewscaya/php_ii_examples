<?php
function Cars() {
    //create local variable
    $ferrariCount = 14; 
    echo "I have a total of $ferrariCount Ferrari's";
} 
Cars();
echo PHP_EOL;
error_reporting(E_ALL);
//disable the display of errors
ini_set('display_errors', 0);
echo "I have a total of $ferrariCount Ferrari's";
echo PHP_EOL;
//enable the display of errors
ini_set('display_errors', 1);
echo "I have a total of $ferrariCount Ferrari's";