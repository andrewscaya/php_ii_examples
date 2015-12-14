<?php
	$time = 1195248471;
	$eTag = 'quack';

	if ($_SERVER['HTTP_IF_NONE MATCH']) 
	{
		$noneMatch = $_SERVER['HTTP_IF_NONE MATCH'];
	}
	else
	{
		$noneMatch = '';
	}

	if ($noneMatch ==  $eTag) 
	{
		header('304 Not Modified', true, 304);
	}

	header("ETag: $eTag");