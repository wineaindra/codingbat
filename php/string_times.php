<?php
	function string_times($string,$n)
	{
		$foo="";
		for ($i=0; $i < $n; $i++)
		{ 
			$foo.=$string;
		}
		return $foo;
	}
	echo string_times("Hi",2)=="HiHi" ? "pass" : "fail"; echo "\n";
	echo string_times("Hi",1)=="Hi" ? "pass" : "fail"; echo "\n";
	echo string_times("Hi",3)=="HiHiHi" ? "pass" : "fail"; echo "\n";
?>

