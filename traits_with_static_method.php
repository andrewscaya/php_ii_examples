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
    public static function getDate()
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

// using static trait method
var_dump(Customers::getDate());
