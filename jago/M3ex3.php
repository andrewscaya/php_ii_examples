<?php
$array = array(
    1 => range(1, 4),
    2 => range(1, 4),
    3 => range(1, 4),
);
foreach ($array as $key => $value) {
    if ($key != 2)
    echo "$key: $value[0], $value[1], $value[2], $value[3]".PHP_EOL;
};

// Jago: here is another approach:
// With this approach, you can have an infinite number of sub-arrays
// and each array can vary in size
$array = array(
    1 => range(1, 4),
    2 => range(1, 5),
    3 => range(1, 6),
    4 => range(1, 2),
    5 => range(1, 8),
    6 => range(1, 3),
);
function displayOddKeys($array)
{
    foreach ($array as $key => $value) {
        // performs logical AND on $key
        // if $key is odd, returns 1 == TRUE
        if ($key & 1) {
            echo "$key: ";
            echo implode(', ', $value);
            echo PHP_EOL;
        }
    };
}
echo "\n---------------------\n";
echo "Another Approach\n";
echo "---------------------\n";
displayOddKeys($array);
