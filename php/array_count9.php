<?php
	// $arr=array(1,2,9,4,9,3);
	// $counts=array_count_values($arr);
	// echo $counts[9]; echo "\n";
	function array_count9($arr)
	{
		$count=array_count_values($arr);
		return $count[9]; 
	}
	echo array_count9(array(1,2,9))==1 ? "pass" : "fail"; echo "\n";
	echo array_count9(array(1,9,9))==2 ? "pass" : "fail"; echo "\n";
	echo array_count9(array(1,9,9,3,9))==3 ? "pass" : "fail"; echo "\n";
?>