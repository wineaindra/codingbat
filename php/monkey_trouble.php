<?php
	function monkey_trouble($a_smile, $b_smile)
	{
		return ($a_smile && $b_smile) || !($a_smile || $b_smile);
	}
	echo monkey_trouble(true,true) ? "pass" : "fail"; echo "\n";
	echo monkey_trouble(false,false)? "pass" : "fail"; echo "\n";
	echo monkey_trouble(true,false)? "fail" : "pass"; echo "\n";
?>
