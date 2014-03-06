<?php 
	function makes10($a,$b)
	{
		if (($a==10 || $b==10) || ($a+$b==10))
			return true;
		else
			return false;
	}
	echo makes10(9,10) ? "True" : "False"; echo "\n";
	echo makes10(9,9) ? "True" : "False"; echo "\n";
	echo makes10(1,9) ? "True" : "False"; echo "\n";
	echo makes10(1,2) ? "True" : "False"; echo "\n";
	echo makes10(5,5) ? "True" : "False"; echo "\n";
?>