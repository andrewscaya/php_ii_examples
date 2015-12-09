<?php

$first = new DateTime(date('Y-m' . '-01'));
$end = clone $first;
$end->add(new DateInterval('P1M'));
$end->sub(new DateInterval('PT1S'));

echo $first->format('l, Y-m-d H:i:s');
echo PHP_EOL;
echo $end->format('l, Y-m-d H:i:s');
echo PHP_EOL;

// NOTE: you could also just say date('Y-m-t') . ' 23:59:59'
