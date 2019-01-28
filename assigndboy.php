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
$user = $_GET['email'];
$zip =  $_GET['idx'];
$rest = $_SESSION['email'];

$sql = "select * from dboy as d inner join (select a.add_id,c.con_id,a.zip from address as a inner join confirmed_order as c on a.add_id= c.add_id INNER JOIN meals as m on c.fid=m.ID where c.uid ='$user' and a.zip ='$zip') as h where d.postalcode = h.zip and d.rest_name = '$rest' ";
$table = mysqli_query($conn,$sql);
$temp = -1;

while($row = mysqli_fetch_assoc($table)){
	echo'hey';
	if($temp == -1){
		$id=$row['did'];
		$temp = 0;
	}
	
	$aid = $row['add_id'];
	$oid=$row['con_id'];
	//echo $id;
	//echo $oid;
	$sql1 = "INSERT INTO `delivery`(`id`, `orderid`,`rest_name`) VALUES ('$id','$oid','$rest');";
	$result = mysqli_query($conn,$sql1);
	
	if(!$result){
		echo "error ";
	}
	else{
		echo "order processed";
	}
	
	$sql2 = "UPDATE dboy set free = 1 where did = '$id'";
	$result1 = mysqli_query($conn,$sql2);
	if(!$result1){
		echo "error2 ";
	}
	
	$sql2 = "UPDATE address set process = '$id' where add_id = '$aid'";

	$result1 = mysqli_query($conn,$sql2);
	if(!$result1){
		echo "error2 ";
	}
	
	
	echo "end";
}

header('location:meal_report.php');

?>