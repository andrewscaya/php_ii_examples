<?php

class Calculator 
{
    
    protected $result;    
    protected $operation;
    
    public function setOperation(OperatorInterface $operation) 
    {
        $this->operation = $operation;
        
    }
    
    public function calculate($number, $result = NULL) 
    {
        if (!$result) $result = $this->result;
        $this->result = $this->operation->run($number, $result);
    }
    
    public function getResult() 
    {
        return $this->result;
    }

}


