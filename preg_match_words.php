<?php
$test = 'To this,ha ha,I say tally ho. Ta ta. "Ha hah"';
// $words = explode(' ', $test);
$words = array();
preg_match_all('/\w+\b/', $test, $words);
var_dump($words);

// produces the same results with a slightly different pattern
// (thanks Joseph!)
$words = array();
$words = preg_split('/\W+/', $test);
var_dump($words);
