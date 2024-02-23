 <?php
 $con = mysqli_connect('localhost','root','');
 mysqli_select_db($con,'db1');
 
 //if product id will get then fetch record from database 
 if(!empty($_POST["pid"]))
 {
	 $search = $_POST["pid"];
	 $qry = "select * from product where pro_id = $search";
	 $res = mysqli_query($con,$qry);
 }	 
 else
 {
	 $qry = "select * from product";
	 $res = mysqli_query($con,$qry);
 }
 
 
 //if product has record then display on the page
 if(mysqli_num_rows($res) > 0)
 {
	 while($row = mysqli_fetch_array($res))
	 {
		 echo"product id is:".$row['pro_id']."<br>"; 
		 echo "product name is:".$row['pro_name']."<br>";
		 echo "product price is:".$row['pro_price']."<br>";
		 echo "product qoh is:".$row['qou']."<br>";
		 echo "<br>";
	 }
 }
 else
 {
	 echo "no record found";
 }
 
 ?>