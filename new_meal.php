
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


$sql="SELECT * from meals";
$result = mysqli_query($conn, $sql);

?>



<body>
<br>
<br>

<br>


 <div class="container" style="background-color:rgb(228,60,27,0.8)">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">ADD
                    <small>new Meal</small>
                </h1>
               
            </div>
        </div>
		</div>
 <div class="container"  style="background-color:rgb(228,60,27,0.8)">
			 <div class="row">
			  <div class="col-md-2"></div>
            <div class="col-md-8">
               
               <form method="POST" action="add_meal_insert.php">
			    

                    <div class="contact-grid">
                       
                            <label>Meal name:</label>
                            <input type="text" class="form-control" name="mname">
                          
                   </div> 
        
                   
                   
					
					
					
					
					  <div class="contact-grid">
                       
                            <label>Veg Or Non-veg:</label>
                            <select id="cat2" class="form-control" name="cat2">
								<optgroup>
									
									<option value="veg">Veg</option>
									<option value="non-veg">Non-Veg</option>
										
										
				
				</optgroup>
				</select>
                       
                    </div>
					
					 <div class="contact-grid">
                      
                            <label>Category:</label>
                            <select id="category" class="form-control" name="category">
								<optgroup>
									
									<option value="Main">MAIN COURSE</option>
									<option value="Sweets">Sweets</option>
										<option value="Desserts" >Desserts</option>
										<option value="snacks" >Snacks</option>
										
										
				
				</optgroup>
				</select>
                        
                    </div>
					
							
					
					
					
					
					
					<div class="contact-grid">
                     
                            <label>Meals Cost:</label>
                            <input type="text" class="form-control" name="cost">
                       
                    </div>
					
					
					
					<div class="contact-grid">
                      
                            <label>Meal picture:</label>
                            <input type="file" class="form-control" name="file">
                      
                    </div>
					
					
					
					
					
					
					
                    <div class="contact-grid">
                       
                            <label>Meal Item description:</label>
                            <textarea rows="4" cols="100" class="form-control" name="message" maxlength="999" style="resize:none"></textarea>
                        
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                  <button type="submit" class="btn btn-primary" name="submit">Register</button>
                </form>
            </div>
			 <div class="col-md-2"></div>

        </div>
        <!-- /.row -->
		
		
		
		</div>
</body>
</html>