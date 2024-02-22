 <?php
 $con = mysqli_connect('localhost','root','');
 mysqli_select_db($con,'db1');
 
 // only require for html and logic in smae file otherwise not need event
  if(isset($_POST["submited"]))
  {
	$prodId = $_POST["prodid"];
	$prodname = $_POST["prodname"];
	$prodprice = $_POST["prodprice"];
	$prodqoh = $_POST["qoh"];
	
	echo"$prodId $prodname $prodprice $prodqoh";
	//inssert query
	if(!empty($prodId) && !empty($prodname) && !empty($prodprice) && !empty($prodqoh))
	{
		$qry = "insert into product values('$prodId','$prodname','$prodprice','$prodqoh')";
		$res = mysqli_query($con,$qry);
		
		if($res)
		{
			echo "record inserted";
		}
		else
		{
			echo "record not inserted";
		}
	}
	
	
  }
 ?>
 
 
 <html>
 <head>
 <title> record insert </title>
 </head>
 <body>
	<form method="POST">
	 <!-- <form method="POST" action="program4_2.php">  if create new file and want write logic on it -->
	<label>product id:
	<input type="number" placeholder="enter product id" name="prodid">
	</label> <br>
	
	<label>product name:
	<input type="text" placeholder="enter product name" name="prodname">
	</label> <br>
	
	<label>product price:
	<input type="number" placeholder="enter product price" name="prodprice">
	</label> <br>
	
	<label>product quality:
	<input type="number" placeholder="enter product quality" name="qoh">
	</label> <br>
	
	<input type="submit" value="insert" name="submited">
	</form>
 </body>
 </html>
 

 