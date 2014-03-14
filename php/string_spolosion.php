<?php
	function string_spolosion($str)
	{
		$result="";
		for ($i=0; $i < strlen($str) ; $i++) 
		{ 
			$result.=$str[$i];
			echo $result;
		}
	}
	string_spolosion("Code"); echo "\n";
	string_spolosion("abc"); echo "\n";
	string_spolosion("ab"); echo "\n";
?>