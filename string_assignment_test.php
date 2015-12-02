<?php

//Try without line 4 1st; if you see a memory limit error, uncomment the line below
//ini_set('memory_limit', '256M');

$max = 100000;
$test = 'TEST';
$start = microtime(TRUE);

// 1st time through "" appears faster
// subsequent runs, single quotes outperform double
// the lower the number the better
for ($y = 0; $y < 10; $y++) {
    // testing ""
    for ($x = 0; $x < $max; $x++) {
        $a[] = "This is a $test\n";
    }
    $current = microtime(TRUE);
    echo 'Double Quotes: ' . ($current - $start);
    echo PHP_EOL;
    $start = $current;

    // testing ''
    for ($x = 0; $x < $max; $x++) {
        $b[] = 'This is a ' . $test . PHP_EOL;
    }
    $current = microtime(TRUE);
    echo 'Single Quotes: ' . ($current - $start);
    echo PHP_EOL;
}
