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
$id=$_GET['idx'];
$uid=$_GET['email'];
//select * from address as a inner join confirmed_order as c on a.add_id= c.add_id INNER JOIN meals as m on c.fid=m.ID where c.uid ="manishkartiks@gmail.com" and a.zip =""; 
$sql="select * from address as a inner join confirmed_order as c on a.add_id= c.add_id INNER JOIN meals as m on c.fid=m.ID where c.uid ='$uid' and a.zip ='$id' and m.rest_reg='$name'";
$result = mysqli_query($conn, $sql);
while($row=mysqli_fetch_assoc($result)){
	
echo'	
	

<div class="container">


		<div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="images/'.$row['file'].'" alt=""><br>
            </div>
            <div class="col-md-6">
                <h2>Dear   '.$row['uid'].'</h2>
                <p>Cook will Cook your food and the food will be delivered </p>
				<p>in <b>30 minutes</b> This is the confirmation of order '.$row['con_id'].' has been successfully placed</p>
			<h4>Delivery address</h4>	
				 <table class="table table-dark" style="background-color:#ccc;">
		  
		<thead>
    <tr>
      <th>Name</th>
	  <th>Address</th>
	  <th>ZIP CODE</th>
	  <th>Mobile</th>
	 
    </tr>
  </thead>
  <tbody>
	
	
			
					<tr>
					<th scope="row">'.$row['name'].'</th>
					<td>'.$row['name'].'</td>
					<td>'.$row['zip'].'</td>
					<td>'.$row['add_'].'</td>
					<td>'.$row['mobile'].'</td>
					
                   
					
				</tr>
			
		
	
		</tbody>
		
 
</table>

<h4>Food Details</h4>	
				 <table class="table table-dark" style="background-color:#ccc;">
		  
		<thead>
    <tr>
      <th>Food name</th>
	  <th>category1</th>
	  <th>category2</th>
	  <th>Cost</th>
	   <th>Quantity</th>
	   
	 
    </tr>
  </thead>
  <tbody>
	
	
			
					<tr>
					<th scope="row">'.$row['mname'].'</th>
					<td>'.$row['category1'].'</td>
					<td>'.$row['category2'].'</td>
					<td>'.$row['cost'].'</td>
					<td>'.$row['quantity'].'</td>
				
                   
					
				</tr>
			
		
	
		</tbody>
			
 
</table>

<h2>PAID</h2>







 </div>
 </div>
        </div>
		
		<hr>';
		
		
}
		?>
				
				
				
				
				
				
				
				
           


        


	
     

       
       
     
	

</body>

</html>
