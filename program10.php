<?php
//Write a program to count the total number of times a specific value appears in an array
$match = 1;
$cnt = 0;
$arr = array(1,4,5,22,7,5,1,2,9,1,1);

for($i=0; $i<count($arr); $i++)
{
		if($arr[$i]== $match)
		{
			$cnt += 1;
		}
}

echo "Total number of $match match $cnt time";

?>