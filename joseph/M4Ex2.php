<?php
function makeArrayUpper( &$array ) {
	if ( !is_array( $array ) || count( $array ) < 1 ) return false;
	foreach( $array as $key => $value) {
		$array[$key] = strtoupper( $value );
	}
	return true;
}

$array = explode( ' ' , 'Zend Training – Building Security into your PHP Applications' );
makeArrayUpper( $array );
var_dump( $array );