 <?php
	#write  a program in php to demonstrate the use of multidimensional arrays.
	
	$emp = array(
	array(1,"A",20000,111),
	array(2,"B",30000,222),
	array(3,"c",40000,333));
	
	for($r=0; $r<3; $r++)
	{
		for($c=0; $c<4; $c++)
		{
			echo $emp[$r][$c];
		}	
		echo"<br>";
	}
	
	
 ?>