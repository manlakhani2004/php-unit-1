<?php
//Write a program in PHP to sort the array of given 5 numbers in ascending and descending order

$arr = array(11,2,5,7,9,15);
$n = count($arr);
sort($arr);

	echo "asending order <br>";
for($i=0; $i<$n; $i++)
{

	echo $arr[$i];
	echo '<br>';
}

rsort($arr);
echo "<br>descending order <br>";
for($i=0; $i<$n; $i++)
{
	
	echo $arr[$i];
	echo '<br>';
}

?>