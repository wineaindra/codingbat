<?php
	function front3($string)
	{
		$threechar=substr($string,0,3);
		return $threechar.$threechar.$threechar;
	}
	echo front3("Java")=="JavJavJav" ? "pass" : "fail"; echo "\n";
	echo front3("abc")=="abcabcabc" ? "pass" : "fail"; echo "\n";
	echo front3("Chocolate")=="ChoChoCho" ? "pass" : "fail"; echo "\n";
	echo front3("ab")=="ababab" ? "pass" : "fail"; echo "\n";
?>