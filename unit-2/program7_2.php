 <?php
 $con = mysqli_connect('localhost','root','');
 mysqli_select_db($con,'db1');
 
 $product_id = $_POST['pid'];
 
 if(!empty($product_id))
 {
	 $qry = "delete from product where pro_id = $product_id";
	 $res = mysqli_query($con,$qry);
	 
	 if($res)
	 {
		 echo "product deleted";
	 }
	 else
	 {
		 echo "product not deleted";
	 }
 }
 else
 {
	 echo "product id not found";
 }
 
 ?>