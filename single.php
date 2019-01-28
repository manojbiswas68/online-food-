
<?php

include('customer_page.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Cookery A Food Category Flat Bootstrap Responsive Website Template | Single :: w3layouts</title>
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


session_start();
					$id=$_GET['idx'];
					$mysqli=new mysqli('localhost','root','','zomato');
					$query=$mysqli->query("select * from meals m inner join rest_reg r on m.rest_reg=r.email where ID='$id' limit 0,1");
					$row=$query->fetch_assoc();

?>

<body>

<!--content-->
<div class="container">
<div class="col-md-12">
<div class="events-bottom">
<?php
		
		echo'
				<div class="col-md-5 events-bottom1 animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					<a href="single.html"><img src="images/'.$row['rest_file'].'" alt="" class="img-responsive" style="height:310px;width:700px;"></a>
				</div>
				<div class="col-md-7 events-bottom2 animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>'.$row['rest_reg'].'</h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					
					</p>
					<div class="address">
					      <h4>Address</h4>
						  <p>'.$row['about'].'
					      <p>'.$row['email'].'</p>
						  <p>'.$row['mobile'].'</p>
						  <p>'.$row['city'].'</p>
						  
					 </div>
				</div>
				<div class="clearfix"> </div>
			</div>
</div>
</div>'

?>




<div class="blog">
	<div class="container">
		
		<div class="col-md-9 ">
		<!--content-->
<div class="single">
	<?php
		
		echo'<div class="single-top">
			<img class="img-responsive wow fadeInUp animated" data-wow-delay=".5s" src="images/'.$row['file'].'" alt="" style="height:310px;width:400px;" />
				<div class="lone-line">
					<h4>'.$row['mname'].'</h4>
					<h3>Rs '.$row['cost'].'.00</h3>
					<h3>'.$row['category1'].'</h3>
					<h3>'.$row['category2'].'</h3>
						
						<p class="wow fadeInLeft animated" data-wow-delay=".5s">'.$row['message'].'</span></p>
				</div>
				<form action="insert_cart.php" method="POST">
				<div class="single-grid wow fadeInLeft animated" data-wow-delay=".5s">
				
				<label class="hvr-rectangle-out">
								 <input type="hidden" value = "'.$id.'" name="id">
								<input type="submit" value="submit" name="submit">
								<input type="number" name="quantity" value="0" class="btn btn-md btn-success">
						</label>
						</div>
						</form>
		</div>';
			
		?>
		
		<div class="leave">
			<h3>Leave a comment</h3>
				<form>
					<div class="single-grid wow fadeInLeft animated" data-wow-delay=".5s">
						
							<input type="text" value="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Name';}">
						
							<input type="text" value="E-mail" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'E-mail';}">
						
						
							<input type="text" value="Web site" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Web site';}">
						
							<textarea value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Comment';}">Comment</textarea>
						<label class="hvr-rectangle-out">
								<input type="submit" value="Send">
						</label>						
				</div>
				</form>
			</div>
		
</div>
<!---->
<!--//content-->

		</div>
		
				

			</div>
<div class="clearfix"> </div>
	</div>
</div>
<?php include('user_footer.php'); ?>
</body>
</html>

