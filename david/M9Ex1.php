<?php
	$pattern1       = '/(thor|thr)ough/';
	$pattern2       = '/^the$/';
	$pattern3       = '/([th][ca])/';
	$challenge      = '/[1-25]+/';
	$pattern1Array  = ['through', 'thorough', 'througt', 'horough', 'athorougha'];
	$pattern2Array  = ['the', 'tie', 'tithe', 'these'];
	$pattern3Array  = ['tap', 'attach', 'taste of patch', 'thousand',
										'cap', 'cat', 'causality'];
	$challengeArray = [125, 125521121, 55555588, 81113999977777,  
										 828, 8769, 1346, 7904];

	function findMatches($newPattern = null, $newArray = [], $matching = null)
	{
		
		foreach ($newArray as $value)
		{
			if (preg_match($newPattern, $value))
			{
				$matches[] = $value;
			}
		
		}

		if (isset($matches) && $matching)
		{	
			return $matches;
		}
		else
		{
			return array_diff($newArray,$matches);
		}
	}

	$matches1      = findMatches($pattern1, $pattern1Array, true);
	$doesnt_match1 = findMatches($pattern1, $pattern1Array, false);
	$matches2      = findMatches($pattern2, $pattern2Array, true);
	$doesnt_match2 = findMatches($pattern2, $pattern2Array, false);
	$matches3      = findMatches($pattern3, $pattern3Array, true);
	$doesnt_match3 = findMatches($pattern3, $pattern3Array, false);
	$matches4      = findMatches($challenge, $challengeArray, true);
	$doesnt_match4 = findMatches($challenge, $challengeArray, false);

	echo strval($pattern1)  . " matches: "       . implode(", ", $matches1) . PHP_EOL;
	echo strval($pattern1)  . " doesn't match: " . implode(", ", $doesnt_match1) . PHP_EOL;
	echo strval($pattern2)  . " matches: "       . implode(", ", $matches2) . PHP_EOL;
	echo strval($pattern2)  . " doesn't match: " . implode(", ", $doesnt_match2) . PHP_EOL;
	echo strval($pattern3)  . " matches: "       . implode(", ", $matches3) . PHP_EOL;
	echo strval($pattern3)  . " doesn't match: " . implode(", ", $doesnt_match3) . PHP_EOL;
	echo strval($challenge) . " matches: "       . implode(", ", $matches4) . PHP_EOL;
	echo strval($challenge) . " doesn't match: " . implode(", ", $doesnt_match4) . PHP_EOL;
