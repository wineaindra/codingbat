<?php
	function array123($arr)
	{
		return (in_array(1, $arr) && in_array(2, $arr) && in_array(3, $arr));
	}
	echo array123(array(1, 1, 2, 3, 1)) ? "pass" : "fail"; echo "\n";
	echo array123(array(1, 1, 2, 4, 1)) ? "fail" : "pass"; echo "\n";
	echo array123(array(1, 1, 2, 1, 2, 3)) ? "pass" : "fail"; echo "\n";
?>