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

$a = new Base(12345);
$b = $a;
var_dump($a, $b);
$a->setId(99999);
var_dump($a, $b);

