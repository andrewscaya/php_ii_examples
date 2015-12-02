<?php

$a = 'TEST';

echo $a ?: 'NOT TEST';
echo PHP_EOL;

$a = '';
echo $a ?: 'NOT TEST';
echo PHP_EOL;
