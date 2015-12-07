<?php
// TODO: when this array is initialized, set all values to 0
$months = [
    'Jan' => range(1,31),
    'Feb' => range(1,28),
    'Mar' => range(1,31),
    'Apr' => range(1,30),
    'May' => range(1,31),
    'Jun' => range(1,30),
    'Jul' => range(1,31),
    'Aug' => range(1,31),
    'Sep' => range(1,30),
    'Oct' => range(1,31),
    'Nov' => range(1,30),
    'Dec' => range(1,31)
];

list($month, $day) = explode('-', date('M-j'));
echo $month . PHP_EOL;
echo $day   . PHP_EOL;
$today = &$months[$month][$day];
$today = 999;
// TODO: clean up display so that it looks nicer
var_dump($months);



