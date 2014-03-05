<?php
	function monkey_trouble($a_smile, $b_smile)
	{
		if  ($a_smile==true && $b_smile==true) 
			return true;
		elseif ($a_smile==false && $b_smile==false)
			return true;
		else
			return false;
	}
	echo monkey_trouble(true,true) ? "In trouble" : "Not in trouble"; echo "\n";
	echo monkey_trouble(false,false)? "In trouble" : "Not in trouble"; echo "\n";
	echo monkey_trouble(true,false)? "In trouble": "Not in trouble"; echo "\n";
?>