<?php

trait DateTrait1
{
    public function getDate()
    {
        return new DateTime('now');
    }
}

trait DateTrait2
{
    public function getDate()
    {
        return date('Y-m-d');
    }
}

class Customers
{
    // as written: getDate() returns DateTime instance
    /*
    use DateTrait1, DateTrait2 {
        DateTrait1::getDate insteadof DateTrait2;
    }*/
    // as written: getDate() returns date string
    /*
    use DateTrait1, DateTrait2 {
        DateTrait2::getDate insteadof DateTrait1;
    }*/
    // as written: you can use both!
    use DateTrait1, DateTrait2 {
        // you must resolve the conflict 1st!!
        DateTrait1::getDate insteadof DateTrait2;
        // now you can start with the aliases
        DateTrait1::getDate as getDateTime;
        DateTrait2::getDate as getDateString;
    }
    // added functionality of some sort here ...
    public $name;
    public $id;
    public function __construct($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
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
var_dump($customer->getDateString());
var_dump($customer->getDateTime());
