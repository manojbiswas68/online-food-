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
	$sql = "SELECT * FROM meals m INNER JOIN cart c ON c.fid = m.ID inner join rest_reg r on m.rest_reg=r.fname  WHERE uid = '$user' and NOT quantity='0';";
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

<?php
$amount = 0;
while($row = mysqli_fetch_assoc($item)){
	if($row['quantity'] != 0){
	?> 
	<div >
	<td>
	<tr>	<?php 
				echo $row['rest_reg'];
				?> 
		</tr>
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
		
	</td>
	</div>
<?php
	}
}

echo "total amount:";
echo $amount;  
?>
<form action="payment.php" method="POST">
	<input type="hidden" value = " <?php echo $amount ?>" name ="amount">
	<input type="submit" value="payment" name="submit">
</form>	

</body>
</html>