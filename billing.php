


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Zomato</title>

    <!-- Bootstrap Core CSS -->
    
	<link href="web/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<script src="web/js/jquery.min.js"></script>
	<link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Custom CSS -->
    

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
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

</head>

<style>
.nav{
list-style:none;


}

.nav li a{
text-decoration:none;
font-weight:bold;
color:#1A1818;

}


.nav li a:hover{
color:#E74C3C;
border-bottom:2px solid #E74C3C;
transition:all 0.1s ease-in;
}





</style>


<body>
 <!-- Navigation -->
     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigaation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				 <div class="logo animated wow pulse" data-wow-duration="1000ms" data-wow-delay="500ms">
			<h1><a href="index.html"><span>F</span><img src="web/images/oo.png" alt=""><img src="web/images/oo.png" alt="">DLER</a></h1>
		</div>
              
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
				
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
				
				<?php
					if(isset($_SESSION['email'])){
							$query = "select email FROM cust_reg";
							$result = mysqli_query($conn,$query);
							if(mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_array($result)){
						if($_SESSION['email']==$row['email']){
							?>		
							<li>
                                <a href="#">Welcome,<?php echo ucfirst($row['email']); ?> </a>
                            </li>
                   
                   
					
					<li>
                        <a href="cust_menu.php">MENU PAGE</a>
                    </li>
                    
					
					
					<li>
                        <a href="logout.php">Logout</a>
                    </li>
                    
                   
                </ul>
				<?php 
						}
					}
							}
					}?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	<br>
	<br>
	<br>
	<br>
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
           
                <h3><a href="blog-post.html"><b><u><?php echo $row['mname'];?> </b></u>
				
				
				</a>
				
                </h3>
				 <p>  <?php 
				echo $row['category1'];
				?></p>
                <p>  <?php 
				echo $row['category2'];
				?></p>
				 <p>  <?php 
				echo $row['message'];
				?></p>
				 <p> <b> <?php 
				echo $row['rest_reg'];
				?></b></p>
                <p><b>COST:RS  <?php 
				echo $row['cost'];
				?> .00</b></p>
                
				 <p><b>QUANTITY:  <?php 
				echo $row['quantity'];
				?></b></p>
                </p>
                <p><b>TOTAL:<?php 
				$amount = $amount + $row['cost'] * $row['quantity'];
				echo $row['cost'] * $row['quantity'];
				?> </b></p>
				<p><form action="delete_cart_item.php" method="POST">
					<input type="hidden" value = " <?php echo $row['id'] ?>" name ="id">
					<input type= "number" value = "1" name= "quantity">
					<input type="submit" value="delete" name="submit">
				</form>	</p>
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

<form action="payment.php" method="POST">
<div class="col-md-3">

	
	
	<input type="submit" value="place order" name="submit" class="btn">
	<input type="submit" value="continue shopping" name="submit" class="btn">
</div>
</form>	
</div>
   </div>             
          
	
	
	
	
	
	
	
	

</body>
 
</html>