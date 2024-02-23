<?php

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'db1');

$pid = $_POST["pid"];
$pqoh = $_POST["pqoh"];

if(!empty($pid) && !empty($pqoh))
{
	$qry = "update product set qou = $pqoh where pro_id = $pid";
	$res = mysqli_query($con,$qry);
	
	if($res)
	{
		echo "product updated";
	}
	else
	{
		echo "product not updated";
	}
}
else
{
	echo "product id or product qoh not found";
}

?>