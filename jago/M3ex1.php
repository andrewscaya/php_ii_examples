<?php
$var = array(
    '2' => 1,
    3   => 3,
    // string keys must be data type string!
    // b=> 4,   // this generates an "undefined variable" notice
    'b' => 4,
    4   => 2,
);
var_dump($var);
