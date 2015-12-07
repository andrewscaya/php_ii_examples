<?php

// assigning arrays to constants: PHP 5.6+ only!
class SomeTime
{
    const DATE_US = 'l, j M, Y';
    const DATE_UK = 'l, M j Y';
    const DATE_NL = 'j M Y';
    const NL_DAYS = ['zondag', 'maandag','dinsdag', 'woensdag', 'donderdag', 'vrijdag', 'zaterdag'];
    public $dateTime = NULL;
    public function __construct()
    {
        $this->dateTime = new DateTime('now');
    }
    public function getDate($format)
    {
        return $this->dateTime->format($format) . PHP_EOL;
    }
    public function getNlDate()
    {
        return self::NL_DAYS[date('w')] . ' ' . $this->getDate(self::DATE_NL);
    }
}

$date = new SomeTime();
echo $date->getDate(SomeTime::DATE_US);
echo $date->getDate(SomeTime::DATE_UK);
echo $date->getNlDate();
