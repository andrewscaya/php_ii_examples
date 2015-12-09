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
    public function getDateNow()
    {
        // this works OK because the method is private,
        // but it's all inside the class
        return $this->getDate();
    }
}

$customer = new Customers(12345);
$customer->setName('Doug');
// getDateNow() works from the outside because it's public
var_dump($customer->getDateNow());
// generates fatal error: can't access a private method outside the class
var_dump($customer->getDate());
