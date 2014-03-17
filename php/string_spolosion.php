<?php
	function string_spolosion($str)
	{
		$len=strlen($str);
		$result1=substr($str, 0,-($len-1));
		for ($i=2; $i < $len; $i++) 
		{ 
			$result1.=substr($str,0,-($len-$i));
		}
		$result1.=$str;
		return $result1;
	}
	echo string_spolosion("Code")=="CCoCodCode" ? "pass" : "fail"; echo "\n";
	echo string_spolosion("abc")=="aababc" ? "pass" : "fail"; echo "\n";
	echo string_spolosion("ab")=="aab" ? "pass" : "fail"; echo "\n";
?>