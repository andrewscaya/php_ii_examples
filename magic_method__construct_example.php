<?php

class Test
{
    public $key;
    public function __construct($key = NULL)
    {
        if ($key) {
            $this->key = $key;
        } else {
            $this->key = md5(date('YmdHis') . rand(0,9999));
        }
    }
}

$a = new Test();
echo $a->key;
echo PHP_EOL;

$b = new Test('This Is a Super Secret Key');
echo $b->key;
echo PHP_EOL;
