<?php
namespace Product;

class Connection
{
    private $dbName = 'zend_ecom';
    private $host = 'localhost:3306';
    private $userName = 'root';
    private $password = '';
    private $db ='';
    private $status = FALSE;

    public function __construct(array $params = array())
    {
        if ($params) {
            $this->dbName   = $params['dbName'];
            $this->host     = $params['host'];
            $this->userName = $params['userName'];
            $this->password = $params['password'];
        }
        $this->status = $this->createConnection();
    }

    public function getDb()
    {
        return $this->db;
    }

    private function createConnection()
    {
        try
        {
            $this->db = new \PDO('mysql:dbname=' . $this->dbName . '; host=' . $this->host, $this->userName, $this->password);
            return true;
        }
        catch(Exception $e)
        {
            error_log("Error connecting: " . $e->getMesssage(), 0);
            return false;
        }
    }

}
