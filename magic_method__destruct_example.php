<?php

class Test
{
    public $fh;
    public function __construct($filename)
    {
        echo 'CONSTRUCTOR' . PHP_EOL;
        $this->fh = fopen($filename, 'w+');
    }
    public function writeFile($message)
    {
        fwrite($this->fh, $message . PHP_EOL);
    }
    public function readFile()
    {
        rewind($this->fh);
        fpassthru($this->fh);
    }
    public function __destruct()
    {
        echo 'DESTRUCTOR' . PHP_EOL;
        fclose($this->fh);
    }
}

$a = new Test(__DIR__ . '/test_a.log');
$a->writeFile('A: Line 1');
$a->writeFile('A: Line 2');
$a->writeFile('A: Line 3');
$a->readFile();
unset($a);

$b = new Test(__DIR__ . '/test_b.log');
$b->writeFile('B: Line 1');
$b->writeFile('B: Line 2');
$b->writeFile('B: Line 3');
$b->readFile();

