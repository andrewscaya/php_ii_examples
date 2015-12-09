 <?php
class Test
{
    protected $values = array();
    public function __call($method, $params)
    {
        if ('get' == substr($method, 0, 3)) {
            $key = substr($method, 3);
            return (isset($this->values[$key])) ? $this->values[$key] : NULL;
        } elseif ('set' == substr($method, 0, 3)) {
            $key = substr($method, 3);
            $this->values[$key] = $params[0];
        }
    }
}

$a = new Test();
$a->setId(12345);
$a->setName('Test');
$a->setCity('Bangkok');
$a->setPhone('111-222-3333');

echo 'ID:    ' . $a->getId()    . PHP_EOL;
echo 'Name:  ' . $a->getName()  . PHP_EOL;
echo 'City:  ' . $a->getCity()  . PHP_EOL;
echo 'Phone: ' . $a->getPhone() . PHP_EOL;
