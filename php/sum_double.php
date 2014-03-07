<?php
	function sum_double($first_num, $second_num)
	{
		return ($first_num+$second_num) * ($first_num==$second_num ? 2 : 1);
	}
	echo sum_double(1,2)==3 ? "pass" : "fail"; echo "\n";
	echo sum_double(3,2)==5 ? "pass" : "fail"; echo "\n";
	echo sum_double(2,2)==8 ? "pass" : "fail"; echo "\n";
?>