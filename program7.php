 <?php
  //Create two functions in PHP, parameterized and non parameterized for implementing string concatenation operation
 function fullname()
 {
	 $fname = "harsh";
	 $lname = "patel";
	 echo "$fname $lname <br>";
 }
 
 function GetName($fname,$lname)
 {
	 echo "$fname $lname ";
 }
 
 fullname();
 GetName('meet','thummer');
 ?>