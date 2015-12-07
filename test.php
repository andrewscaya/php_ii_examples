<?php

class Base
{
    // $id MUST be an integer!
    protected $id;
    public function __construct($id)
    {
        $this->setId($id);
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        if (!is_int($id)) {
            throw new Exception('Must be an integer!');
        }
        $this->id = (int) $id;
    }
}

class Customers extends Base
{
    // added functionality of some sort here ...
    protected $name;
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
}

class SpecialCustomer extends Customers
{
    // some added functionality
}

function test(array $a, Base $b, $x)
{
    var_dump($a, $b, $x);
}

$a = [1,2,3];
$b = new Customers(12345);
$b->setName('Test');
$c = 100;

test($a, $b, $c);

$a = [1,2,3];
$b = new SpecialCustomer(99999);
$c = 100;

test($a, $b, $c);

