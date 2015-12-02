<pre>
<?php
// Starting code

$array = array(
    1 => range(1,4),
    2 => range(1,4),
    3 => range(1,4),
    4 => range(1,8),
    5 => range(1,3)
);

// original code:
/*
for ($i = 1; $i <= 3; $i += 2) {
    echo $i.": ".implode(",",$array[$i])."\r";
}
*/

$max = count($array);
for ($i = 1; $i <= $max; $i += 2) {
    echo $i . ': ' . implode(',', $array[$i]) . PHP_EOL;
}
