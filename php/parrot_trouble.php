<?php
	function parrot_trouble($is_talking, $time)
	{
		
		if($is_talking==true && ($time<7 || $time>20))
			return true;
		else
			return false;
	}
	echo parrot_trouble(true,6) ? "True" : "False"; echo "\n";
	echo parrot_trouble(true,7) ? "True" : "False"; echo "\n";
	echo parrot_trouble(false,6) ? "True" : "False"; echo "\n";
	echo parrot_trouble(true,23) ? "True" : "False"; echo "\n";
	echo parrot_trouble(false,23) ? "True" : "False"; echo "\n";
?>