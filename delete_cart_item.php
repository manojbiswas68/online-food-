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
echo $user;
echo $id;


$sql = "UPDATE cart SET quantity = quantity - '$quantity' WHERE uid= '$email' AND id='$id' AND quantity >= '$quantity';";
$check=mysqli_query($conn,$sql);

if(!$check){
	echo " delete error";
}
header("Location:billing.php");