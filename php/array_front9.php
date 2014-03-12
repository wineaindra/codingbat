<?php
	function array_front9($arr)
	{
		$FirstFour= array_slice($arr,0,4);
		return (in_array(9,$FirstFour));
	}
	echo array_front9(array(1,2,9,3,4)) ? "pass" : "fail"; echo "\n";
	echo array_front9(array(1, 2, 3, 4, 9)) ? "fail" : "pass"; echo "\n";
	echo array_front9(array(1, 1, 2, 1, 2, 3)) ? "fail" : "pass"; echo "\n";
?>