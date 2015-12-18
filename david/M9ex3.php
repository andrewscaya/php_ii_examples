<?php
	$url1 = 'www.bbc.co.uk';
	$url2 = 'news.bbc.co.uk';
	$url3 = 'www.bbc.co.uk/worldservice/';
	$urlPattern = '/^([a-z0-9])+\.([a-z0-9])+\.([a-z]){2}\.([a-z]){2}/i';
	$urlPattern2 = '/^([a-z0-9])+\.([a-z0-9])+\.([a-z]){2}\.([a-z]){2}\/([a-z0-9]){3,20}\//i';


	echo 'url1 matches is: ' . preg_match($urlPattern, $url1)? 'true':'false';
	echo PHP_EOL;
	echo 'url2 matches is: ' . preg_match($urlPattern, $url2)? 'true':'false';
	echo PHP_EOL;
	echo 'url3 matches is: ' . preg_match($urlPattern2, $url3)? 'true':'false';
	echo PHP_EOL;