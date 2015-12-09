<?php
// the getDate() method directly defined in the Customer class
// takes precedence over the getDate() method defined in the trait

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
    public function getDate()
    {
        return date('Y-m-d');
    }
}

$customer = new Customers(12345);
$customer->setName('Doug');
var_dump($customer->getDate());
