<?php

interface IdInterface
{
    public function getId();
}

trait BaseTrait
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

class Customers implements IdInterface
{
    use BaseTrait;
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

class Products implements IdInterface
{
    use BaseTrait;
    // added functionality of some sort here ...
    public $title;
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }
}

class Test
{
    public function processId(IdInterface $class)
    {
        $id = $class->getId();
        // do a database lookup based on ID
        return get_class($class) . '::' . $id;
    }
}

$customer = new Customers(12345);
$customer->setName('Doug');
$product = new Products('ABC');
$product->setTitle('Really Great Product');
$test = new Test();

echo $test->processId($customer);
echo PHP_EOL;
echo $test->processId($product);
echo PHP_EOL;

