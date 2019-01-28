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

$p4=$_SESSION['email'];


if(isset($_POST['submit']))
{

    $p1=$_POST['fname'];
	$p2=$_POST['zip'];
	$p3=$_POST['address'];
	$p5=$_POST['mobile'];
   
	
	
    $sql="INSERT INTO address(name,zip,add_,email_id,mobile) VALUES ('$p1','$p2','$p3','$p4','$p5')";
    
    if(mysqli_query($conn,$sql)){
		echo'hey';
        echo "<script> alert('New record created successfully!')</script>";
		header('location:payment.php');
    }
    //else{
      //  echo "Error: ".$sql."<br>".mysqli_error($conn);
    //}   
}
else
    echo "not submittd";
	
?>