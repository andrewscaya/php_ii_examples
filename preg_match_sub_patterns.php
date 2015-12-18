<?php
// http://www.unlikelysource.com/xyz.php
$test = [
    // 1               2             3
    //---   ---------------------- --------
    'http://www.unlikelysource.com/xyz.php',
    'http://unlikelysource.net/',
    'https://github.com/dbierer/php_ii_examples',
    'packages.framework.com',
    'this is clearly not valid',
];
$pattern = '/^(http(s)?:\/\/)?([a-z]+\.([a-z]+(\.)?)+)(\/.*)?/i';

foreach ($test as $string) {
    echo $string;
    if (preg_match($pattern, $string, $matches)) {
        echo ' FOUND';
    } else {
        echo ' NOT FOUND';
    }
    var_dump($matches);
    echo 'Schema: ' . $matches[1] . PHP_EOL;
    echo 'DNS: ' . $matches[3] . PHP_EOL;
    echo 'Base Path: ' . (isset($matches[6]) ? $matches[6] : '') . PHP_EOL;
    echo PHP_EOL;
}

