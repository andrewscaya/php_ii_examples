<?php

$max = 100000;
$test = 'TEST';
$start = microtime(TRUE);

// 1st time through "" appears faster
// subsequent runs, single quotes outperform double
// the lower the number the better
for ($y = 0; $y < 10; $y++) {
    // testing ""
    for ($x = 0; $x < $max; $x++) {
        // if evenly divisible by 2, % == 0 which === FALSE
        // only odd numbers will show
        if ($x % 2) { $a[] = $x; }
    }
    $current = microtime(TRUE);
    echo 'Modulus: ' . ($current - $start);
    echo PHP_EOL;
    $start = $current;

    // testing ''
    for ($x = 0; $x < $max; $x++) {
        // if evenly divisible by 2, $x & 1 == 0
        // only odd numbers will show
        if ($x & 1) { $b[] = $x; }
    }
    $current = microtime(TRUE);
    echo 'Bitwise AND: ' . ($current - $start);
    echo PHP_EOL;
}
