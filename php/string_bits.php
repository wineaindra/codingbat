<?php
	function string_bits($str)
	{
		$result="";
		for ($i=0; $i < strlen($str); $i+=2) 
		{ 
			$result.=$str[$i];
		}
		return $result;
	}
	echo string_bits("Hello")=="Hlo" ? "pass" : "fail"; echo "\n";
	echo string_bits("Hi")=="H" ? "pass" : "fail"; echo "\n";
	echo string_bits("Heeololeo")=="Hello" ? "pass" : "fail"; echo "\n";
?>