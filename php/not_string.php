<?php
	function not_string($string)
	{
		$str=$string;
		$var = "not ";
		$strarr=explode(" " , trim($str));
		if ($strarr[0]=="not")
		{
			return $string;
		}
		else
		{
			$var .= $string;
			return $var;
		}
	}
	$var1=not_string('not candy'); echo $var1; echo "\n";
	$var2=not_string('x'); echo $var2; echo "\n";
	$var3=not_string('not bad'); echo $var3; echo "\n";
	$var4=not_string('foo'); echo $var4; echo "\n";
?>