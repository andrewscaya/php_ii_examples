<?php
$path = '../';
foreach (glob($path.'*.*') as $filename) {
    echo str_replace( $path, '', $filename ) . ' – size: ' . filesize($filename) . PHP_EOL;
}