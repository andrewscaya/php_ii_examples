<?php
// code from the trait is copied *exactly* as is
// visibility has no effect: it's a just copy!

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

trait DateTrait1
{
    private function getDate()
    {
        return new DateTime('now');
    }
}

class Customers extends Base
{
    // redefines getDate as public
    use DateTrait1 {
        DateTrait1::getDate as public;
    }
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
    public function getDateNow()
    {
        return $this->getDate();
    }
}

$customer = new Customers(12345);
$customer->setName('Doug');
// getDateNow() works from the outside because it's public
var_dump($customer->getDateNow());
// works OK because the "use" statement re-defined visibility
var_dump($customer->getDate());
