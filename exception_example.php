<?php
// "finally" was only introduced in 5.5+

class Test
{
    protected $time;
    public function __construct($time)
    {
        if (!$time instanceof DateTime) {
            throw new InvalidArgumentException('Must be a DateTime instance!');
        }
        $this->time = $time;
    }
}

try {
    $t = new Test(new DateTime('now'));
    $x = new Test(12345);
} catch (InvalidArgumentException $e) {
    echo 'Invalid Argument: ';
    echo $e->getMessage();
} catch (Exception $e) {
    echo 'Generic Exception: ';
    echo $e->getMessage();
} finally {
    echo PHP_EOL;
}

