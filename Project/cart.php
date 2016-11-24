<?php 
session_start();
include_once 'dbconnect.php';
if (!isset($_SESSION['user_id'])) {
	header('location:login.php');
}
include 'header.php';
$user=$_SESSION['user_id'];

if (isset($_POST['to_cart'])) {
	$product_id=$_POST['product_id'];
	$user_id=$_POST['user_id'];
	$quantity=$_POST['quantity'];

	if(mysql_query("INSERT INTO cart(product_id, user_id, quantity) 
		VALUES($product_id, $user_id, $quantity)"))
	{
		echo '<h3>Added to cart</h3>';
	}
	else
	{
		die(mysql_error());
	}
}

echo "<h3>Current Cart</h3>";

echo'
<style type="text/css">
.myTable { width:400px;background-color:#eee;border-collapse:collapse; }
.myTable th { background-color:#000;color:white;width:50%; }
.myTable td, .myTable th { padding:5px;border:1px solid #000; color:#222930; }
</style>
<!-- End Styles -->
<table class="myTable">
<tr>
<th>Products</th>
<th>Quantity</th>
<th>Price</th>
<th>Confirm</th>
</tr>';
$sql = mysql_query("SELECT * FROM cart where user_id=$user");
while ($row = mysql_fetch_array($sql)){
	$proid=$row['product_id'];
	$psql=mysql_query("SELECT * FROM product where product_id=$proid");
	$proarr=mysql_fetch_array($psql);
	$orprice=$row['quantity']*$proarr['price'];

echo  ' <form name="order" action="orders.php"  method="post">
<input type="hidden" name="product_id" value="'.$row['product_id'].'">
<input type="hidden" name="user_id" value="'.$row['user_id'].'">
<input type="hidden" name="quantity" value="'.$row['quantity'].'">
<input type="hidden" name="order_price" value="'.$orprice.'">
<tr>
<td>'.$proarr['product_name'].'</td>
<td>'.$row['quantity'].'</td>
<td>'.$orprice.'</td>
<td><input type="submit" name="order" value="Place Order" style="color:#222930;"> </td>
</tr>
</form> ';
}
echo'</table>';


?>