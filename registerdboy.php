<?php


$conn = mysqli_connect("localhost","root","","zomato");
if(!$conn){
	echo "connction not stablish";
}

if(isset($_POST['submit'])){
$name = $_POST['name'];
echo $name;
echo'hey';
$address = $_POST['address'];
$postalcode = $_POST['postalcode'];
$phone = $_POST['phone'];

$sql = "INSERT INTO dboy (name, address, postalcode, phoneno) VALUES ('$name','$address','$postalcode','$phone');"; 
if(mysqli_query($conn,$sql)){
	echo"<script>alert('new record updated successfully');</script>";
}
else{
	echo'error';
}
}
?>

<html>
	<head>
		<title>register dilevry boy</title>
	</head>	
	<body>
		<form action="registerdboy.php" method="POST">
			<input type="text" name="name" placeholder="name">
			<input type="text" name="address" placeholder="address">
			<input type="text" name="postalcode" placeholder="Postal code">
			<input type="text" name="phone" placeholder="phone number">
			<input type="submit" value="submit" name="submit">
		</form>
	</body>
</html>