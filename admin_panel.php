<?php
session_start();
if(isset($_SESSION['admin_user'])){
    $user = $_SESSION['admin_user'];
    $flag = 1;
}
else{
    $user = 'Login';
    $flag = 0;
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

    <title>Zomato</title>

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
<!-- start-smoth-scrolling -->
    <script type="text/javascript" src="web/js/move-top.js"></script>
    <script type="text/javascript" src="web/js/easing.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function($) {
        $(".scroll").click(function(event){   
          event.preventDefault();
          $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
      });
    </script>
  <!-- start-smoth-scrolling -->
<link href="web/css/styles.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/component.css" />
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
color:#34495E;

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
height:900px  ;
}

.fill{
border-radius:50px;
z-index=-1;

}

div#carousel {
    position:relative;
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
                    <li>
                        <a href="userpanel.php" >Customers</a>
                    </li>
                    <li>
                        <a href="#">Orders</a>
                    </li>
                     <li>
                        <a href="restpanel.php" >Restaurants</a>
                    </li>
          
                    
                    

                    <?php
                    if($flag == 1){
                   echo ' <li>
                       <a href="add_admin.php" >Add Admin</a> 
                    </li>';
                    }
                    ?>

                    <li>
                        <a href="logout_admin.php" ><?php echo $user; ?></a>
                    </li>
                </ul>
                
                   
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

</body>

</html>
