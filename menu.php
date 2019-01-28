
<?php
include('restaurant_page.php');
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

$sql="SELECT * from meals where rest_reg='$name'";
$result = mysqli_query($conn, $sql);

?>
<div class="container">
         <table class="table table-dark" style="background-color:#ccc;">
		  
		<thead>
    <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>CATEGORY1</th>
      <th>CATEGORY2</th>
	  <th>COST</th>
	  <th>IMAGE</th>
	  <th rowspan="6">DESCRIPTION</th>
	  <th>ACTION</th>
    </tr>
  </thead>
  <tbody>
		<?php
		$no 	= 1;
		$total 	= 0;
		while ($row1 = mysqli_fetch_array($result))
		{
			
			echo '<tr>
					<th scope="row">'.$row1['ID'].'</th>
					<td>'.$row1['mname'].'</td>
					<td>'.$row1['category1'].'</td>
					<td>'.$row1['category2'].'</td>
					<td><img src="images/'.$row1['file'].'"</td>
                    <td>'.$row1['cost'].'</td>
                    <td>'.$row1['message'].'</td>
					<td> <a class="btn btn-warning" href="http://localhost/zomato/edit_meal.php?idx='.$row1['ID'].' ">Edit</a></td>
						<td> <a class="btn btn-danger" href="http://localhost/zomato/edit_meal.php?delete='.$row1['ID'].' class="btn btn-warning">Delete</a></td>
				</tr>';
			
			$no++;
		}?>
		</tbody>
		
 
</table>

</div>

	
     

       
       
     
	

</body>

</html>
