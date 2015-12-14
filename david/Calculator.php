<?php
class Calculator
{
    static function calculate($n1 = NULL, $n2 = NULL , $operator = NULL)
    {

        if (!self::validateNumber($n1) || !self::validateNumber($n2))
        {
            throw new Exception('Operands must be numeric.');
        }

        if (!self::validateOperator($operator))
        {
            throw new Exception('Operator must be a (add), s (subtract), m (multiply) or d (divide).');
        }

        if ($operator == 'a')
        {
            return $n1 + $n2;
        }
        else if  ($operator == 's')
        {
            return $n1 - $n2;
        }
        else if ($operator == 'm')
        {
            return $n1 * $n2;
        }
        else if ($operator == 'd')
        {
            if ($n2 == 0)
            {
                throw new Exception('Cannot divide by zero.');
            }

            return $n1 / $n2;
        }
    }

    static function validateNumber($numberToValidate)
        {
            return is_numeric($numberToValidate);
        }

    static function validateOperator($operatorToValidate)
    {
        $operators = ['a', 's', 'm', 'd'];
        // OR:
        // return strpos(' asmd', $operatorToValidate);
        return in_array(strtolower($operatorToValidate), $operators);
    }
}
