

<?php
include('customer_page.php');
$server="localhost";
$user="root";
$password="";
$dbname="zomato";
$conn=mysqli_connect($server,$user,$password,$dbname);

if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}

$user=$_SESSION['email'];


if(isset($_POST['submit']))
{
	$t='';
	$sql = "SELECT *FROM meals INNER JOIN cart ON fid = meals.ID WHERE uid = '$user' and quantity>=1;";
	$sql1="select * from address where email_id='$user'";
	$item1=mysqli_query($conn,$sql1);
	while($row1=mysqli_fetch_assoc($item1)){
	$t=$row1['add_id'];
	}
	echo $t;
	$item = mysqli_query($conn,$sql);
	while($row=mysqli_fetch_assoc($item)){
		$p1=$row['fid'];
		$p2=$row['quantity'];
		$p3=$row['uid'];
		$p4=$row['cost'] * $row['quantity'];
		$p5=$t;
		$sql="INSERT INTO confirmed_order(fid,quantity,uid,amount,add_id) VALUES ('$p1','$p2','$p3','$p4','$t')";
		 
    if(mysqli_query($conn,$sql)){
        
		 echo "<script> alert('are you sure!')</script>";
    }
    }
    
   
	
		//header('location:new3.php');
    //else{
      //  echo "Error: ".$sql."<br>".mysqli_error($conn);
    //}   
}
else
    echo "not submittd";


?>