<?php
#create an array named $sub,assign five element to it and displat the element assigned using loop and foreach statement

$sub = array("A","b","c","d");
$total = count($sub);

for($i=0; $i<$total; $i++)
{
	echo"$sub[$i] <br>";
}

foreach($sub as $value)
{
	echo "$value <br>";
}
?>