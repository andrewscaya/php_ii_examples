<?php
require_once('Calculator.php');

if (isset($_GET['n1']) && isset($_GET['n2']) && isset($_GET['op']))
{
	try 
	{
		$result = Calculator::calculate($_GET['n1'], $_GET['n2'], $_GET['op']);
		echo "Result is: " . $result;
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
	}
}
else
{
	echo "Please paste in these url parameters onto the end of the url: <br>";
	echo "/?n1=4&n2=3&op=m";
}

