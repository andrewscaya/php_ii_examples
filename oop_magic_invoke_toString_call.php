 <?php
class Child
{
    // params allowed
    public function __invoke($param = NULL)
    {
        return 'Magic Invoke' . PHP_EOL;
    }
    public function __call($method, $params)
    {
        return 'Magic Call: ' . $method . ':' . var_export($params, TRUE) . PHP_EOL;
    }
    public function __toString()
    {
        return 'Magic toString' . PHP_EOL;
    }
}

$a = new Child();
echo $a();
echo $a->someMethodWhichDoesNotExist(1, 2, 'ABC');
echo $a;
