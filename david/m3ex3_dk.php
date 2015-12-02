<?php
// well done david!  This approach allows for any number of keys + sub-arrays of any length

$array = array(
		1 => range(1,4),
		2 => range(1,4),
		3 => range(1,4)
);

for ($i = 1; $i <= count($array); $i++) 
{
	if ($i % 2 == 1)
	{	
		echo $i . ": " . implode($array[$i], ",") . "<br>";
	}
	
}

?>
