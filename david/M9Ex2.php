<?php
	$str = file_get_contents('myfile.txt');
	echo preg_replace('/(C\+\+|Java)/i', 'PHP', $str);