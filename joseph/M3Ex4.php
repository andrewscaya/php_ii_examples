<?php
//Starting code

$phrase = 'Zend Training - Building Security into your PHP applications';
$array = explode(' ', $phrase);

foreach($array as &$word) {
    $word = strtoupper($word);
}

var_dump($array);

// another approach:

echo PHP_EOL;
var_dump(str_word_count(strtoupper($phrase), 1));
