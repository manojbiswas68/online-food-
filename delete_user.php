<?php 
require 'db.php';
if(isset($_GET['did'])){
	$id = $_GET['did'];
}
$q = "DELETE From cust_reg WHERE cust_id = '$id'";
$result = mysqli_query($conn, $q);
if(!$result)
  echo mysqli_error($conn);
else
	header('location: userpanel.php');
?>
