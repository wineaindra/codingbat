<?php

	function sleep_in($is_weekday,$is_on_vacation)
	{
		return (!$is_weekday || $is_on_vacation);
	}
echo sleep_in(False, False) ? "pass" : "fail"; echo "\n";
echo sleep_in(True, False) ? "fail" : "pass"; echo "\n";
echo sleep_in(False, True) ? "pass" : "fail"; echo "\n";
?>