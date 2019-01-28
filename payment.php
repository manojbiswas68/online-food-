
<?php
session_start();
$server="localhost";
$user="root";
$password="";
$dbname="zomato";
$conn=mysqli_connect($server,$user,$password,$dbname);
if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}

?>


 <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style>
.p{
	font-family:Arial, Helvetica, sans-serif;
	
	
}
</style>
<body>
 
 
 
 <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
       
<form action="address.php" method="POST">
        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Enter Delivery Address</a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
							<div class="container">
								<div class="col-md-6">
                               <div class="control-group form-group">
									<div class="controls">
									
                           
                            <input type="text" class="form-control" placeholder="Enter your Name" name="fname">
							 
							
                           
							</div>
						</div>
						
						 <div class="control-group form-group">
									<div class="controls">
                           
                            <input type="text" class="form-control" placeholder="Enter your Mobile no" name="mobile">
							 
							
                           
							</div>
						</div>
						
						 <div class="control-group form-group">
									<div class="controls">
                           
                            <input type="text" class="form-control" placeholder="Enter your Zip code" name="zip">
							 
							
                           
							</div>
						</div>
						
						
						
						<div class="control-group form-group">
                        <div class="controls">
                       
                            <textarea rows="4" cols="100" class="form-control" name="address" required data-validation-required-message="Please enter your Address" maxlength="999" style="resize:none" placeholder="Enter Address here..."></textarea>
                        </div>
						</div>
						
						<input type="submit" value="Submit" name="submit" class="btn">
	
                        </div>
                    </div>
                            </div>
                        </div>
                    </div>
					</form>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Order Summary</a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
								<div class="container">
	 <div class="row">
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

$user = $_SESSION['email'];
$order = "SELECT * FROM cart WHERE uid = '$user';";
$ordertable = mysqli_query($conn,$order);
$check = mysqli_num_rows($ordertable);


if($check > 0){
	$sql = "SELECT *FROM meals INNER JOIN cart ON fid = meals.ID WHERE uid = '$user';";
	$item = mysqli_query($conn,$sql);

}
else{
	
	echo "emty cart";
}

?>
 
                
          

<?php
$amount = 0;
while($row = mysqli_fetch_assoc($item)){
	if($row['quantity'] != 0){
	?> <div class="container">
            <div class="col-md-3">
			<a href="blog-post.html">
                  <?php echo'  <img class="img-responsive img-hover" src="images/'.$row['file'].'" alt="">'?>
                </a>
				  </div>
            <div class="col-md-5">
           
                <h4>DISH NAME:<b><?php echo $row['mname'];?> </b>
				
				
				</a>
				
                </h4>
				<p> FOOD TYPE: <?php 
				echo $row['category1'];
				?></p>
                <p> VEG/NON-VEG: <?php 
				echo $row['category2'];
				?></p>
				 <p> DESCRIPTION: <?php 
				echo $row['message'];
				?></p>
				 <p>RESTAURANT NAME: <b> <?php 
				echo $row['rest_reg'];
				?></b></p>
                <p>COST:RS  <?php 
				echo $row['cost'];
				?> .00</p>
                
				 <p>QUANTITY:  <?php 
				echo $row['quantity'];
				?></p>
                </p>
                <p><B>TOTAL:<?php 
				$amount = $amount + $row['cost'] * $row['quantity'];
				echo $row['cost'] * $row['quantity'];
				?> </b></p>
				
				  </div>
        </div>
		<hr>
				<?php
	}
}

?>


 <?php
echo "total amount:";
echo $amount; ?> 
<form action="order_confirmation.php" method="POST">
<div class="col-md-3">
	<input type="submit" value="place order" name="submit" class="btn">
	<p>Order confirmation will be sent to <b><?php echo $user ?></b> </p>
	

</div>	
</form>
</div>
   </div>             
 
								
								
								
								
								
								
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Payment options</a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                   
                </div>
                <!-- /.panel-group -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <hr>


</body>

   <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</html>














<!----
$user = $_SESSION['email'];
$order = "SELECT * FROM cart WHERE uid = '$user';";
$ordertable = mysqli_query($conn,$order);
$check = mysqli_num_rows($ordertable);
$amount=$_POST['amount'];


if($check > 0){
	$sql = "SELECT * FROM meals m INNER JOIN cart c ON c.fid = m.ID inner join rest_reg r on m.rest_reg=r.fname  WHERE uid = '$user' and NOT quantity='0';";
	
	$item = mysqli_query($conn,$sql);

}
else{
	
	echo "empty cart";
}


while($row = mysqli_fetch_assoc($item)){
	$p1=$row['fid'];
	$p2=$row['quantity'];
	$p3=$row['Rest_id'];
	$p4=$row['email'];
	$p5=$row['uid'];
	$p6=$row['address_id'];
	
	
	$sql = "INSERT INTO payment (fid,quantity,rest_id,uid,address_id) VALUES ('$p1','$p2','$p3','$p4','$p5')";
	$check=mysqli_query($conn,$sql);
}


	

		echo "payment successful";
	
?>
-->

</body>
</html>