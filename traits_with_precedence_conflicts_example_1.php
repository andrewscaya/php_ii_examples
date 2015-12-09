<?php
// the getDate() method in the trait used in the child class
// takes precedence over the getDate() method defined in the Base class
// just like overriding a method in a child class

trait DateTrait1
{
    public function getDate()
    {
        return new DateTime('now');
    }
}

class Base
{
    public $id;
    public function __construct($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getDate()
    {
        return date('Y-m-d');
    }
}

class Customers extends Base
{
    use DateTrait1;
    // added functionality of some sort here ...
    public $name;
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
}

$customer = new Customers(12345);
$customer->setName('Doug');
var_dump($customer->getDate());
