<?php
//Write a PHP script for that creates a database named "DB-1"in MySQL

$con=mysqli_connect('localhost','root','');

if($con)
{
	echo "connection established <br>";
}
else{
	echo"connection not established <br>";
}


//databse create 
$db_create = "create database db1";
$qry = mysqli_query($con,$db_create);

if($qry)
{
	echo "database created successfully";
}
else
{
	echo "database not created";
}

?>