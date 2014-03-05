<?php

	function sleep_in($is_weekday,$is_on_vacation)
	{

		if ($is_weekday==false || $is_on_vacation==true) 
			return true;
	}

echo sleep_in(False, False) ? "pass" : "fail"; echo "\n";
echo sleep_in(True, False) ? "fail" : "pass"; echo "\n";
echo sleep_in(False, True) ? "pass" : "fail"; echo "\n";
?>