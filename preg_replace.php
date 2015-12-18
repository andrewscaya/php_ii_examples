<?php
$test = 'My phone number is 123-4455';
echo preg_replace('/\d/', 'x', $test);
echo PHP_EOL;
