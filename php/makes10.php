<?php 
	function makes10($a,$b)
	{
		return ($a==10 || $b==10 || ($a+$b)==10);
	}
	echo makes10(9,10) ? "pass" : "fail"; echo "\n";
	echo makes10(9,9) ? "fail" : "pass"; echo "\n";
	echo makes10(1,9) ? "pass" : "fail"; echo "\n";
	echo makes10(1,2) ? "fail" : "pass"; echo "\n";
	echo makes10(5,5) ? "pass" : "fail"; echo "\n";
	echo makes10(10,10) ? "pass" : "fail"; echo "\n";
?>