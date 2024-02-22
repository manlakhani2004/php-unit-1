 <?php
 
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'db1');

if($con)
{
	echo "connnection estabilished <br>";
}
else
{
	echo "connection not estabilished <br>";
}

//create table 
//run only one time if run then change new table name
$tb_create = "create table product(pro_id int(3) primary key,
pro_name varchar(50) not null,
pro_price float(7,2) not null,
qou int(5) not null)";

$qry = mysqli_query($con,$tb_create);

if($qry)
{
  echo "product table created successfully";
}
else
{
	echo "product table not created";
}



 
 ?>