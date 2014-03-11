<?php
	function string_times($string,$n)
	{
		for ($i=0; $i < $n; $i++)
		{ 
			echo $string;
		}
	}
string_times("Hi",2);echo "\n";
string_times("Hi",1);echo "\n";
string_times("Hi",3);echo "\n";
?>

