 <?php
 
 #create a program in php to demonstrate the use if___else and switch statement 
 
 $a = 14;
 $b = 22;
 
 if($a>$b)
 {
	 echo "a is greater <br>";
 }
 else{
	 echo "b is greater <br>";
 }
 
 ?>
 
 
 <?php
 
 $favcolor = "red";
 
 switch($favcolor)
 {
	case "red":
		echo " my favcolor is red";
		break;
	case "blue":
		echo " my favcolor is blue";
		break;
	default:
		echo "not my favcolor";
 }
 ?>