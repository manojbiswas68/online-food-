<?php


$conn = mysqli_connect("localhost","root","","zomato");
if(!$conn){
	echo "connction not stablish";
}

if(isset($_POST['submit'])){
	echo'hey';
	$userid = $_POST['userid'];
	$restid = $_POST['restid'];
	$foodid = $_POST['foodid'];
	$quant = $_POST['quant'];
	$address = $_POST['address'];
	$post = $_POST['post'];
	$payment = $_POST['payment'];

	$sql = "INSERT INTO `porder`(`userid`, `restid`, `foodid`, `quant`, `address`, `postalcode`, `payment`) VALUES ('$userid','$restid','$foodid','$quant','$address','$post','$payment')";
	
	if($result = mysqli_query($conn,$sql)){
		echo"<script>alert('new record updated');</script>";
	}
	else
		echo"error";
	

}
?>

<html>
	<head>
		<title>place order</title>
	</head>	
	<body>
		<form action="placeorder.php" method="POST">
			<input type="text" name="userid" placeholder="userid">
			<input type="text" name="restid" placeholder="restid">
			<input type="text" name="foodid" placeholder="foodid">
			<input type="text" name="quant" placeholder="quantity">
			<input type="text" name="address" placeholder="address">
			<input type="text" name="post" placeholder="poastal code">
			<input type="radio" name="payment" value="0" checked>COD
			<input type="radio" name="payment" value="1">pay online 
			<input type="submit" name="submit" value="place order">
		</form>
	</body>
</html>