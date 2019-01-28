<?php
include('customer_page.php');
	

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
	<br><br>
<div class="container">
<div class="page-header">
        <h3>Alerts</h3>
      </div>

	<?php
		$sql = "select distinct rest_reg from meals m inner join confirmed_order c on c.fid=m.ID where c.uid='$email'";
		$result = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_assoc($result)){

			?>
			<div class="alert alert-success" role="alert">
			<strong>GET MESSAGES FROM <a href="boxcust.php?id=<?php echo $row['rest_reg'];?>" style="font-size:20px;"></strong>
				<?php echo $row['rest_reg']; ?> <br>
			</a>
			</div>
			<?php
		}
	?>
	
	
	
	</div> 
     
</body>
</html>