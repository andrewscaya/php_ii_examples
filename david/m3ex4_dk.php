<?php

$array = explode(' ', 'Zend Training - Building Security into your PHP Applications');

foreach ($array as $key => $value) 
{
	$array[$key] = strtoupper($value);
}

var_dump($array);

// here is another approach david:

echo "\n---------------------\n";
echo "Another Approach\n";
echo "---------------------\n";
$array = str_word_count(strtoupper('Zend Training - Building Security into your PHP Applications'), 1);
var_dump($array);

?>
