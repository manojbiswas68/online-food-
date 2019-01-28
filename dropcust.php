<?php	
	$dbservername = "localhost";
	$dbusername = "root";
	$dbpass = "";
	$dbname = "zomato";

	$conn = mysqli_connect($dbservername,$dbusername,$dbpass,$dbname);
	if(!$conn){
		echo "connction not stablish";
	}

	if(isset($_POST['msg'])){
		$from = $_POST['email_from'];
		$to = $_POST['email_to'];
		$txt = $_POST['msg'];
//		echo $from." ";
//		echo $to." ";
		
//s		echo $txt." ";
		$sql = "INSERT INTO message (mfrom,mto,text) VALUES ('$from','$to','$txt');";	
		$result = mysqli_query($conn,$sql);
		if(!$result){
			echo "error";
		}
echo "sucess";
	}
header('location:boxcust.php?id='.$to);
?>
