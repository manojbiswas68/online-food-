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



$p7=$_SESSION['email'];
if(isset($_POST['submit']))
{

    $p1=$_POST['mname'];
	$p2=$_POST['category'];
	$p3=$_POST['cat2'];
	$p4=$_POST['cost'];
	$p5=$_POST['file'];
    $p6=$_POST['message'];
	
	
    $sql="INSERT INTO meals(mname,category1,category2,cost,file,message,rest_reg) VALUES ('$p1','$p2','$p3','$p4','$p5','$p6','$p7')";
    
    
    if(mysqli_query($conn,$sql)){
        echo "<script> alert('New record created successfully!')</script>";
		header('location:new_meal.php');
    }
    //else{
		

      //  echo "Error: ".$sql."<br>".mysqli_error($conn);
    //}   
}
else
    echo "not submittd";
	
?>