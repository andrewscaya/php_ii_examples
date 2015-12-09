<?php

class IThrowExceptions extends Exception {
	function __construct($message, $code) {
		$this->message = $message . " - see I told you that I throw exceptions!";
		$this->code = $code;
	}

}

//$a = "Green Eggs"; 
$a = "Ham";

try {

	if ( $a == "Green Eggs") {
		throw new Exception('I do not like Green Eggs', 857); 
	} else {
		throw new IThrowExceptions('I do not like them, Sam I Am', 999);
	}

} catch (Exception $e) {

	echo '<p>Error message: ' . $e->getMessage() . '</p>';
	echo '<p>Code is: ' . $e->getCode() . '</p>';

}