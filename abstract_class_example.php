<?php

abstract class GenericValidator
{
    protected $pattern = '/.*/';
    public function getPattern()
    {
        return $this->pattern;
    }
    public function setPattern($pattern)
    {
        $this->pattern = $pattern;
    }
    public function isMatch($value)
    {
        return preg_match($this->pattern, $value);
    }
    abstract public function isValid($data);
}

class EmailValidator extends GenericValidator
{
    const EMAIL_PATTERN = '/\w+@(\w+)+\.\w+/';
    public function isValid($email)
    {
        $this->setPattern(self::EMAIL_PATTERN);
        return $this->isMatch($email);
    }
}

// generates fatal error!
//$g = new GenericValidator();

$valid = new EmailValidator();
echo ($valid->isValid('doug@unlikelysource.com')) ? 'VALID EMAIL' : 'INVALID EMAIL';
echo PHP_EOL;
echo ($valid->isValid('joe')) ? 'VALID EMAIL' : 'INVALID EMAIL';
echo PHP_EOL;
