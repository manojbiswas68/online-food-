<?php
if(isset($_POST['submit']))
{
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

$p1=$_POST["email"];
$p2=$_POST["pass"];
$sql="SELECT * from cust_reg";
$result = mysqli_query($conn, $sql);

while($row=mysqli_fetch_assoc($result)){

if ($row['email']==$p1 && $row['pass']==$p2 ) {
    session_start();
	$_SESSION['email']=$row['email'];
	header('location:cust_menu.php');
	} else{
    $_SESSION["error"] = $error;
	echo'failed';
    //header("location: index.php"); //send user back to the login page.
}
	}
		
	}
	
	
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>

?>



