<?php
	function sum_double($first_num, $second_num)
	{
		if ($first_num==$second_num)
		{
			$result=($first_num+$second_num)*2;
			return $result;
		}
		else
		{
			$result=$first_num+$second_num;
			return $result;
		}
	}
	
	echo sum_double(2,3); echo "\n";
	echo sum_double(3,3); echo "\n";
?>