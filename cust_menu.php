







<?php

include('customer_page.php');
?>



<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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

session_start();
$sql="SELECT * from meals";
$result = mysqli_query($conn, $sql);

?>



<body>
<br>
<br>

<br>
<br>
<br>
<br>
<div class="container">
<div class="col-md-12">
<div class="menu-top">
				<div class="col-md-4 menu-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>Menu</h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<span>There are many variations</span>
				</div>
				<div class="col-md-8 menu-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour , or randomised words which don't look even slightly believable.There are many variations by injected humour. There are many variations of passages of Lorem Ipsum available.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour , or randomised words</p>
				</div>
				<div class="clearfix"> </div>
			</div>
</div>	
</div>		

	<div class="menu">
		<div class="container">
		<div class="col-md-3 categories-grid">
			<div class="search-in animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
				<h4>Search</h4>
					<div class="search">
					<form>
						<input type="text" placeholder="Search" required="" >
						<input type="submit" value="" >
					</form>
					</div>
			</div>
				<div class="grid-categories animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h4>Categories</h4>
					<ul class="popular">
						<li><a href="http://localhost/zomato/cust_menu.php"><i class="glyphicon glyphicon-menu-right"> </i>All</a></li>
						<li><a href="http://localhost/zomato/cust_menu_1.php"><i class="glyphicon glyphicon-menu-right"> </i>Main course</a></li>
						<li><a href="http://localhost/zomato/cust_menu_2.php"><i class="glyphicon glyphicon-menu-right"> </i>Sweets</a></li>
						<li><a href="http://localhost/zomato/cust_menu_3.php"><i class="glyphicon glyphicon-menu-right"> </i>Desserts</a></li>
						<li><a href="http://localhost/zomato/cust_menu_4.php"><i class="glyphicon glyphicon-menu-right"> </i>Snacks</a></li>
					</ul>
				</div>
</div>
		
		<div class="col-md-9">
			
			<?php
		$no 	= 1;
		$total 	= 0;
		while ($row = mysqli_fetch_array($result))
		{
			echo'<div class="menu-bottom animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<div class="col-md-4 menu-bottom1">
					<div class="btm-right">
						<a href="http://localhost/zomato/single.php?idx='.$row['ID'].'">
							<img src="images/'.$row['file'].'" alt="" class="img-responsive">
							<div class="captn">
								<h4>'.$row['mname'].'</h4>
								<p>RS '.$row['cost'].'.00</p>				
							</div>
						</a>						
					</div>
				</div>';
				$no++;
		}?>
				
	</div>
	</div>
	
	
	
	
	
	
</div>
</div>
</body>
</html>