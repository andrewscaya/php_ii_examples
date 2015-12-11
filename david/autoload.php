<?php
function __autoload($class)
{
    $fn = __DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    require_once($fn);
}
