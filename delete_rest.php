<?php 
require 'db.php';
if(isset($_GET['did'])){
	$id = $_GET['did'];
}
$q = "DELETE From rest_reg WHERE Rest_id = '$id'";
$result = mysqli_query($conn, $q);
if(!$result)
  echo mysqli_error($conn);
else
	header('location: restpanel.php');
?>
