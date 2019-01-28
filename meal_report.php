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



$sql="select * from confirmed_order c inner join meals m on c.fid=m.ID inner join rest_reg r on m.rest_reg='$name' inner join address a on a.add_id=c.add_id group by c.add_id;";
$result = mysqli_query($conn, $sql);

?>
<div class="container">
         <table class="table table-dark" style="background-color:#ccc;">
		  
		<thead>
    <tr>
      <th>UID</th>
	  <th>NAME</th>
	  <th>ZIP CODE</th>
	  <th>ADDRESS</th>
	  <th>MOBILE</th>
    </tr>
  </thead>
  <tbody>
		<?php
		$no 	= 1;
		$total 	= 0;
		while ($row1 = mysqli_fetch_array($result))
		{
			
			echo '<tr>
					<th scope="row">'.$row1['uid'].'</th>
					<td>'.$row1['name'].'</td>
					<td>'.$row1['zip'].'</td>
					<td>'.$row1['add_'].'</td>
					<td>'.$row1['mobile'].'</td>';
					$process = $row1['process'];
                   
		
		
		if($process != '0'){
			
			$sq = "select * from dboy where did = '$process' ";
			
			$r = mysqli_query($conn,$sq);
			
			$ro = mysqli_fetch_assoc($r);
			echo'<td><b>'.$ro['name'].'</b></td>';
			
		}
		if($process =='0'){ 
			
			$zip = $row1['zip'];
			$ss = "select * from dboy where postalcode = '$zip' ";
		
			$rr = mysqli_query($conn,$ss);
			$rrr = mysqli_num_rows($rr);
			echo $rrr;
			if($rrr <= '0'){
				echo '<td>no delivey boy available for this location</td>';
			}
			else{
				echo'<td> <a class="btn btn-warning" href="http://localhost/zomato/assigndboy.php?idx='.$row1['zip'].'&email='.$row1['uid'].'"">Assign deliver boy</a></td>';
			}
		}		
					echo'<td> <a class="btn btn-danger" href="http://localhost/zomato/order_view.php?idx='.$row1['zip'].'&email='.$row1['uid'].'" class="btn btn-warning">View</a></td>
				</tr>';
			
			
		}?>
		</tbody>
		
 
</table>

</div>

	
     

       
       
     
	

</body>

</html>
