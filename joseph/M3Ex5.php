<?php
// recommended to define function before use
function getName($firstName, $lastName, $midInitial = "") {
    return ucwords(strtolower($lastName))
           . ', '
           . ucwords(strtolower($firstName))
           . ($midInitial != '' ? ' ' . strtoupper($midInitial) . '.' : '');
}

echo getName("john","smith","k");
echo PHP_EOL;
echo getName("jose","ferrera");
echo PHP_EOL;


