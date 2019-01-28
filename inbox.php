<?php
include('restaurant_page.php');
	

	$conn = mysqli_connect("localhost","root","","zomato");
	if(!$conn){
		echo "connction not stablish";
	}
	$email = $_SESSION['email'];
	

?>




<html>
<head>
<title>Zomato</title>

<!-- //animation-effect -->
<body>
	
	
	
	
	
<br><br><br>
<div class="page-header">
        <h3>Alerts</h3>
      </div>

	<?php
		$sql = "SELECT mfrom,mto FROM message mfrom group by mfrom,mto having mto = '$email'";
		$result = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_assoc($result)){

			?>
			<div class="alert alert-success" role="alert">
			<strong>GET MESSAGES FROM <a href="box.php?id=<?php echo $row['mfrom'];?>" style="font-size:20px;"></strong>
				<?php echo $row['mfrom']; ?> <br>
			</a>
			</div>
			<?php
		}
	?>
	
	
	
	 
     
</body>
</html>