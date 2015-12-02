<?php

function getName($firstName, $lastName, $middleInitial = "") {
	
	return ucwords($lastName . ", " . $firstName . " " . $middleInitial) ;
}

echo getName('john', 'smith', 'k');

?>