<?php
class Registry
{
    protected $instance;
    protected static $properties = array();
    public static function get($key)
    {
        return ((NULL !== self::$properties[$key]) ? self::$properties[$key] : NULL);
    }
    public static function set($key, $value)
    {
        self::$properties[$key] = $value;
    }
}

Registry::set('A', 'ABC');
echo Registry::get('A');
echo PHP_EOL;

