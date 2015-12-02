<?php

$max = 100000;
$test = 'TEST';
$start = microtime(TRUE);

for ($x = 0; $x < $max; $x++) {
    $a['TEST' . $x] = $x;
}

// subsequent runs, isset() outperforms array_key_exists()
// the lower the number the better
for ($y = 0; $y < 10; $y++) {
    // testing ""
    $current = microtime(TRUE);
    array_key_exists('TEST1000000', $a);
    echo 'array_key_exists(): ' . number_format($current - $start, 8);
    echo PHP_EOL;
    $start = $current;

    // testing ''
    $current = microtime(TRUE);
    isset($a['TEST1000000']);
    echo 'isset():            ' . number_format($current - $start, 8);
    echo PHP_EOL;
}
