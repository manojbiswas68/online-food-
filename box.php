<?php
include('restaurant_page.php');
	$dbservername = "localhost";
	$dbusername = "root";
	$dbpass = "";
	$dbname = "zomato";

	$conn = mysqli_connect($dbservername,$dbusername,$dbpass,$dbname);
	if(!$conn){
		echo "connction not stablish";
	}
	$mfrom =  $_GET['id'];
//	echo $mfrom;
//SELECT * FROM message m inner join rest_reg r on r. WHERE mfrom = '$mto' AND mto='$mfrom' OR mto = '$mto' and mfrom = '$mfrom'";
	
	$mto = $_SESSION['email'];
	$sql = "SELECT * FROM message WHERE mfrom = '$mto' AND mto='$mfrom' OR mto = '$mto' and mfrom = '$mfrom' order by id desc";
	$result = mysqli_query($conn,$sql);


?>

<body>

<br><br><br><br><br><br>

<div class="container">
<div class="single-grid wow fadeInLeft animated" data-wow-delay=".5s">
<form action="drop.php" method="POST">
	
	<input type = "hidden" value="<?php echo $mfrom ?>"  name = "email_to" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Name';}"><br>
	 <input type = "hidden" value="<?php echo $mto ?>" name = "email_from" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Name';}"><br>
	<input type= "text" name = "msg" placeholder = "message" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Type Message';}"></textarea><br>
	<label class="hvr-rectangle-out">
		<input type="submit" value="send">
	</label>
	
</form>
</div>
</div>

	<?php 
	while($row = mysqli_fetch_assoc($result)){
?>
	<div class="container">
			<div class="comment">
							
							
							 <div class="media wow fadeInLeft animated" data-wow-delay=".5s">
								<div class="code-in">
									<p class="smith"><a href="#">FROM:<?php echo $row['mfrom'];?></a>
									<p class="reply"><a href="#">TO:<?php echo $row['mto'];?></a></i><span>&nbsp;&nbsp;<?php echo $row['timestamp'];?></span></a></p></p>
									
									<div class="clearfix"> </div>
								</div>
							    <div class="media-left">
							       
									<?php     
											if( $row['mfrom']==$mto){
												$s="select * from rest_reg where email='$mto'";
												
												$r = mysqli_query($conn,$s);
												while($p = mysqli_fetch_assoc($r)){
														$file=$p['rest_file'];
												}
											}
											else{
												$s="select * from cust_reg where email='$mfrom'";
												
												$r = mysqli_query($conn,$s);
												while($p = mysqli_fetch_assoc($r)){
														$file=$p['cust_file'];
												}
											}
											
									
									
									?>
									
									
							        	<img src="images/<?php echo $file?>" alt="" style="height:80px;width:80px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
										;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p class="reply"><?php	echo $row['text'];?></p>
							       
							     </div>
							   
		
								
								
							    </div>
	
			</div>
	</div>

	<hr>
	<?php
	}

?>

</body>
</html>
	