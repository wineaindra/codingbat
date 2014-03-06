<?php
	function pos_neg($a,$b,$negative)
	{
		if ((($a<0 && $b>0) && $negative==false) || (($a>0 && $b<0) && $negative==false))
			return true;
		elseif (($a<0 && $b<0) && $negative==true)
			return true;
		else 
			return false;
	}
	echo pos_neg(1,-1,false) ? "True" : "False"; echo "\n";
	echo pos_neg(-2,3,false) ? "True" : "False"; echo "\n";
	echo pos_neg(-4,-5,true) ? "True" : "False"; echo "\n";
	echo pos_neg(1,1,false) ? "True" : "False"; echo "\n";
	echo pos_neg(3,-9,true) ? "True" : "False"; echo "\n"
?>