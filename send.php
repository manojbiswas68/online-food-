<?php	
	$dbservername = "localhost";
	$dbusername = "root";
	$dbpass = "";
	$dbname = "zomato";

	$conn = mysqli_connect($dbservername,$dbusername,$dbpass,$dbname);
	if(!$conn){
		echo "connction not stablish";
	}
	if(isset($_POST['submit'])){
		$from = $_POST['email_from'];
		$to = $_POST['email_to'];
		$txt = $_POST['msg'];
		echo $from." ";
		echo $to." ";
		
		echo $txt." ";
		$sql = "INSERT INTO message (mfrom,mto,txt) VALUES ('$from','$to','$txt');";	
		$result = mysqli_query($conn,$sql);
		if(!$result){
			echo "error";
		}
	}
//	echo "+";
?>
<html>
<head>
	<title>message</title>
</head>
<body>
<form action="drop.php" method="POST">
	
	<input type = "text" placeholder = "email_from"  name = "email_from" ><br>
	 <input type = "text" placeholder = "email_to" name = "email_to" ><br>
	<textarea type= "text" name = "msg" placeholder = "message"></textarea><br>
	<input type="submit" value="submit">
</form>
</body>
</html>