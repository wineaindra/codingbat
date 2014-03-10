<?php 
	function missing_char($string,$n)
	{
		return str_replace($string{$n},"",$string);
	}
	echo missing_char("kitten",1)=="ktten" ? "pass" : "fail"; echo "\n";
	echo missing_char("kitten",0)=="itten" ? "pass" : "fail"; echo "\n";
	echo missing_char("kitten",4)=="kittn" ? "pass" : "fail"; echo "\n";
?>
