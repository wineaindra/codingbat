<?php
	function diff21($n)
	{
		return (abs($n-21) * ($n > 21 ? 2 : 1)); 
	}
	echo diff21(19)==2 ? "pass" : "fail"; echo "\n";
	echo diff21(10)==11 ? "pass" : "fail"; echo "\n";
	echo diff21(21)==0 ? "pass" : "fail"; echo "\n";
	echo diff21(25)==8 ? "pass" : "fail"; echo "\n";
?>