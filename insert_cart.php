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
echo'connection established';
	
$id = $_POST['id'];
$quantity = $_POST['quantity'];
$email = $_SESSION['email'];
/*echo $id;
echo $quantity;
echo $email;
*/
$sql = "SELECT * FROM cart WHERE uid = '$email' AND fid = '$id';";


$run=mysqli_query($conn,$sql);
$result= mysqli_num_rows($run);

if($result>0){
	echo "update";
	$sql = "UPDATE cart SET quantity = quantity + '$quantity' WHERE uid= '$email' AND fid='$id';";
	$check=mysqli_query($conn,$sql);
	if(!$check){
		echo " 1insert error";
	}
}
else{
	
	echo "insert";
	$sql = "INSERT INTO cart (uid,fid,quantity) VALUES ('$email','$id','$quantity')";

	$check=mysqli_query($conn,$sql);
	if(!$check){
		echo " 2insert error";
	}
}
	
header("location:single.php?idx=$id");
?>