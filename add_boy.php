<?php

include('restaurant_page.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>Cookery A Food Category Flat Bootstrap Responsive Website Template | Menu :: w3layouts</title>
<link href="web/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="web/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cookery Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="web/application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---->
<link href='//fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<link href="web/css/styles.css" rel="stylesheet">
<!-- animation-effect -->
<link href="web/css/animate.min.css" rel="stylesheet"> 
<script src="web/js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->

</head>
<style type="text/css">
	
		
		img{
			height:40px;
			width:40px;
			
		}
		
		
	</style>
	
<body>

   
    <!-- Page Content -->
   <br>
   <br>
   <br>
    <br>
   <br>
   <br>
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
$name=$_SESSION['email'];



if(isset($_POST['send']))
{

    $p1=$_POST['fname'];
	$p2=$_POST['phone'];
	$p3=$_POST['zip'];
	$p4=$_POST['add'];
   
	
	
    $sql="INSERT INTO dboy(name,address,postalcode,phoneno,rest_name) VALUES ('$p1','$p4','$p3','$p2','$name')";
    
    if(mysqli_query($conn,$sql)){
		
        echo "<script> alert('New record created successfully!')</script>";
    }
    //else{
      //  echo "Error: ".$sql."<br>".mysqli_error($conn);
    //}   
}

	




?>





		<div class="contact">
		<div class="container">
		
			<div class="contact-top">
			
			<div class="col-md-12 contact-para animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
			<h5>Delivery Boy Form</h5>
			<form action="add_boy.php" method="post">
				<div class="grid-contact">
					<div class="col-md-6 contact-grid">
						<p class="your-para">Name </p>
							<input type="text" value="" name="fname" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						</div>
					<div class="col-md-6 contact-grid">
					<p class="your-para">Phone no</p>	
						<input type="text" value="" name="phone" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="grid-contact">
					<div class="col-md-6 contact-grid">
						<p class="your-para">Zip Code</p>
						<input type="text" value="" name="zip" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
					</div>
					<div class="col-md-6 contact-grid">
						<p class="your-para">Address</p>
						<input type="Password" value="" name="add" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
					</div>
					<div class="clearfix"> </div>
				</div>
				
						<input type="submit" value="Send" name="send" >
					</div>
			</form>
			</div>	
			
			<div class="clearfix"> </div>
		</div>
	</div>
	</div>
	
     

       
       
     
	

</body>

</html>
