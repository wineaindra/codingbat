<?php
	function parrot_trouble($is_talking, $time)
	{
		return ($is_talking && ($time < 7 || $time > 20));
	}
	echo parrot_trouble(true,6) ? "pass" : "fail"; echo "\n";
	echo parrot_trouble(true,7) ? "fail" : "pass"; echo "\n";
	echo parrot_trouble(false,6) ? "fail" : "pass"; echo "\n";
	echo parrot_trouble(true,23) ? "pass" : "fail"; echo "\n";
	echo parrot_trouble(false,23) ? "fail" : "pass"; echo "\n";
?>