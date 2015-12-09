<?php
// Q: what is a singleton?
// A: an object of which there can only be 1 instance

class Registry
{
    protected static $instance;
    protected $properties = array();
    public function get($key)
    {
        return ((NULL !== $this->properties[$key]) ? $this->properties[$key] : NULL);
    }
    public function set($key, $value)
    {
        $this->properties[$key] = $value;
    }
    protected function __construct()
    {
    }
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

// this generates fatal errror
//$r = new Registry();

// this gives us our instance
$r = Registry::getInstance();
$r->set('A', 'AAA');
$r->set('B', 'BBB');
echo $r->get('A') . PHP_EOL;
echo $r->get('B') . PHP_EOL;
echo PHP_EOL;

// presumably this would be in another block of code
$x = Registry::getInstance();
echo $x->get('A') . PHP_EOL;
echo $x->get('B') . PHP_EOL;
echo PHP_EOL;
