<?php
echo getName("john","smith","k");


function getName($firstName, $lastName, $midInitial = "") {
	return ucwords(strtolower($lastName)).", ".ucwords(strtolower($firstName)).($midInitial != ""?" ".strtoupper($midInitial).".":"");
}