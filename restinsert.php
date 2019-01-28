<?php
$server="localhost";
$user="root";
$password="";
$dbname="zomato";
$conn=mysqli_connect($server,$user,$password,$dbname);

if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}
if(isset($_POST['submit']))
{

    $p1=$_POST['fname'];
	$p2=$_POST['email'];
	$p3=$_POST['pass'];
	$p4=$_POST['mobile'];
	$p5=$_POST['city'];
    $p6=$_POST['message'];
	
	
    $sql="INSERT INTO users(fname,email,pass,mobile,city,message) VALUES ('$p1','$p2','$p3','$p4','$p5','$p6')";
    
    
    if(mysqli_query($conn,$sql)){
        echo "<script> alert('New record created successfully!')</script>";
    
    }
    //else{
      //  echo "Error: ".$sql."<br>".mysqli_error($conn);
    //}   
}
else
    echo "not submittd";
	
?>