<?php

class Test
{
    protected $id;
    public function getId()
    {
        return $id;
    }
    public function __clone()
    {
         throw new Exception('Do Not Clone Me!');
    }
    // OR
    /*
    private function __clone()
    {
        // generates fatal error
    }
    */
}

try {
    $a = new Test();
    $b = clone $a;
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}
