<?php
	function front3($string)
	{
		if (strlen($string) > 3)
		{
			$threewords=substr($string,0,3);
			for ($i=0; $i < 3; $i++) 
			{ 
				echo $threewords;
			}

		}
		else
			for ($i=0; $i < 3; $i++)
			{ 
				echo $string;
			}
	}
	echo front3("Java"); echo "\n";
	echo front3("abc"); echo "\n";
	echo front3("Chocolate"); echo "\n";
?>