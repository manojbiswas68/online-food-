<?php
session_start();
$server="localhost";
$user="root";
$password="";
$dbname="zomato";
$conn=mysqli_connect($server,$user,$password,$dbname);
if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}

$user = $_SESSION['email'];
$order = "SELECT * FROM cart WHERE uid = '$user';";
$ordertable = mysqli_query($conn,$order);
$check = mysqli_num_rows($ordertable);


if($check > 0){
	$sql = "SELECT mname,cost,quantity,cart.id FROM meals INNER JOIN cart ON fid = meals.ID WHERE uid = '$user';";
	$item = mysqli_query($conn,$sql);

}
else{
	
	echo "emty cart";
}

?>


<html>
<head>
	<title>cart</title>
</head>
<body>
<p>ITEM 	COST 	QUNATITY 	TOTAL</p>

<?php
$amount = 0;
while($row = mysqli_fetch_assoc($item)){
	if($row['quantity'] != 0){
	?> 
	<div >
	<td>
		<tr>	<?php 
				echo $row['mname'];
				?> 
		</tr>
		<tr>	<?php 
				echo $row['cost'];
				?> 
		</tr>
		<tr>	<?php 
				echo $row['quantity'];
				?> 
		</tr>
		<tr>	<?php 
				$amount = $amount + $row['cost'] * $row['quantity'];
				echo $row['cost'] * $row['quantity'];
				?> 
		</tr>
		<tr>
				<form action="delete_cart_item.php" method="POST">
					<input type="hidden" value = " <?php echo $row['id'] ?>" name ="id">
					<input type= "number" value = "1" name= "quantity">
					<input type="submit" value="delete" name="submit">
				</form>	
		</tr>	
	</td>
	</div>
<?php
	}
}

echo "total amount:";
echo $amount;  
?>
<form action="place_order.php" method="POST">

	<!-- this part is left to do -->
	<input type="submit" value="place order" name="submit">
</form>	

</body>
</html>