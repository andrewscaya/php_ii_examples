<?php 
// reclassified E_STRICT notices
ini_set('error_reporting', 1);
error_reporting(E_ALL|E_STRICT);

class BaseController
{
    protected $id;
    public function __construct($id = NULL)
    {
        $this->id = $this->setId($id);
    }
    public function setId($id = null)
    {
        $this->id = $id;
    }
}
class UserController extends BaseController
{
    public function __construct()
    {
        $this->id = $this->setId();
    }
    public function setId()
    {
        $id = (isset($_GET['id'])) ? (int) $_GET['id'] : 0;
    }
    public function testAction()
    {
        return 'TEST';
    }
}

$u = new UserController();
echo UserController::testAction();
echo PHP_EOL;

function getArray() {
    return [1, 2, 3];
}

function squareArray(array &$a) {
    foreach ($a as &$v) {
        $v *= 2;
    }
}

// Generates an E_STRICT in PHP 5
var_dump(squareArray(getArray()));
echo PHP_EOL;

// Generates a warning in PHP 7.
var_dump(squareArray((getArray())));
echo PHP_EOL;

