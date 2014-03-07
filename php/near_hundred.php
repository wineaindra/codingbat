<?php
	function near_hundred($n)
	{
		return (abs($n-100)<=10  || abs($n-200)<=10);
	}

	echo near_hundred(93) ? "pass" : "fail"; echo "\n";
	echo near_hundred(80) ? "fail" : "pass"; echo "\n";
	echo near_hundred(198) ? "pass" : "fail"; echo "\n";
	echo near_hundred(230) ? "fail" : "pass"; echo "\n";
	echo near_hundred(202) ? "pass" : "fail"; echo "\n";

?>