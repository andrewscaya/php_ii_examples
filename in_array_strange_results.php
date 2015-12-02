<?php

$a = [0, 1, 2, 3];

echo (in_array(FALSE, $a)) ? 'FOUND' : 'NOT FOUND';
echo PHP_EOL;

// need to set strict type checking to preclude interpolation
echo (in_array(FALSE, $a, TRUE)) ? 'FOUND' : 'NOT FOUND';
echo PHP_EOL;
