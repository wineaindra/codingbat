<?php
	function diff21($n)
	{
		if ($n > 21)
		{
			$result=($n-21)*2;
			return $result;
		}
		else
		{
			$result=(21-$n);
			return $result;
		}
	}

	echo diff21(19); echo "\n";
	echo diff21(10); echo "\n";
	echo diff21(21); echo "\n";
?>