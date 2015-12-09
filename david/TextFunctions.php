<?php

class TextFunctions {

    /**
     * Produces upper or lowercase depending on param $upper
     *
     * @param boolean $upper == TRUE == uppercase | FALSE == lowercase
     * @return string $string
     */
    static function changeCase($string, $upper)
    {

        if ($upper) {
            $string = strtoupper($string);
        } else {
            $string = strtolower($string);
        }

        return $string;
    }

}

?>
