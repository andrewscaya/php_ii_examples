<?php
class TextFunctions {
	public static function changeCase( $string, $upperOrLower ) {
		if( $upperOrLower ) return strtoupper( $string );
		else return strtolower( $string );
	}
}

$string = "Hello, World\n";

echo TextFunctions::changeCase($string, true);
echo TextFunctions::changeCase($string, false);

