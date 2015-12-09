<?php

class Test
{
    public $id = 1;
    public $name = 'Test';
}

$a = new Test();
$b = $a;

echo ($a == $b) ? 'A == B' : 'A != B';
echo PHP_EOL;

$c = new Test();
echo ($a == $c) ? 'A == C' : 'A != C';
echo PHP_EOL;

$c->id = 999;
echo ($a == $c) ? 'A == C' : 'A != C';
echo PHP_EOL;

echo ($a === $b) ? 'A === B' : 'A !== B';
echo PHP_EOL;

$a->name = 'ZZZ';
echo ($a < $c) ? 'A < C' : 'A not < C';
echo PHP_EOL;

$c->id = 1;
echo ($a < $c) ? 'A < C' : 'A not < C';
echo PHP_EOL;
var_dump($a, $c);
