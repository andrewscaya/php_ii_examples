<pre>
<?php
// Starting code

$array = array(
	1 => range(1,4),
	2 => range(1,4),
	3 => range(1,4)
);

for ($i = 1; $i <= 3; $i += 2) {
	echo $i.": ".implode(",",$array[$i])."\r";
}