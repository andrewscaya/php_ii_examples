<?php

class TextFunctions {

	static function changeCase($string, $convert) {
		
		if ($convert) {
			$string = strtoupper($string);
		}
		
		return $string;
	}

}

?>