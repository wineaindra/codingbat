<?php
	function last2($str)
	{
		$count=0;
		$last2=substr($str, -2);
		for ($i=0; $i < strlen($str)-2; $i++) 
		{ 
			if (substr($str, $i,2)==$last2) 
			{
				$count+=1;
			}
		}
		return $count;
	}
echo last2("hixxhi")==1 ? "pass" : "fail"; echo "\n";
echo last2("xaxxaxaxx")==1 ? "pass" : "fail"; echo "\n";
echo last2("axxxaaxx")==2 ? "pass" : "fail"; echo "\n";
echo last2("aabbaabbaabbaa")==3 ? "pass" : "fail"; echo "\n";
?>
