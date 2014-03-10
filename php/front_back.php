<?php
	function front_back($string)
	{
		$first=$string[0];
		$last=$string[strlen($string)-1];
		$string[0]=$last;
		$string[strlen($string)-1]=$first;
		return $string;
	}
	echo front_back("code")=="eodc" ? "pass" : "fail"; echo "\n";
	echo front_back("a")=="a" ? "pass" : "fail"; echo "\n";
	echo front_back("ab")=="ba" ? "pass" : "fail"; 

?> 
