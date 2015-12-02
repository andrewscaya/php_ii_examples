<?php
//Starting code

$array = explode(' ', 'Zend Training - Building Security into your PHP applications');

foreach($array as &$word) {
	$word = strtoupper($word);
}

var_dump($array);