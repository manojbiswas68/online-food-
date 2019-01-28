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


header.carousel{
height:500px;
width:auto;
border-radius:30px;

overflow:hidden;

}

#mycarousel{
height:900px	;
}

.fill{
border-radius:50px;
z-index=-1;

}

div#carousel {
    position:relative;
}

div.form-group {
    position:absolute;
    z-index:9999999;
    top:300px; /* change to whatever you want */
    left:auto; /* change to whatever you want */
    right:auto; /* change to whatever you want */
    bottom:auto; /* change to whatever you want */
	
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
							$query = "select * FROM rest_reg";
							$result = mysqli_query($conn,$query);
							if(mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_array($result)){
						if($_SESSION['email']==$row['email']){
							?>		
							<li>
                                <a href="#">Welcome,<?php echo ucfirst($row['email']); ?> </a>
                            </li>
                   
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Administration<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="new_meal.php">Add new meal</a>
                            </li>
                            <li>
                                <a href="menu.php">View my dish</a>
                            </li>
                            <li>
                                <a href="meal_report.php">See Meal Report</a>
                            </li>
							<li>
								<a href="add_boy.php">Add Delivery Boy</a>
							</li>
                           
                        </ul>
                    </li>
					
					
					<li>
                        <a href="inbox.php">See messages</a>
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
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	

</body>

</html>
