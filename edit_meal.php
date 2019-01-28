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

body{
height:100%;
  
	background:#fff url(reg_pic2.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;


}
.control-group {
  
   
    display: block;

    text-transform: uppercase;
    border-radius: 2px;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
	

}




</style>



<body>

    <!-- Navigation -->
   
    <!-- Page Content -->
    <div class="container" style="background-color:rgb(228,60,00,0.8)">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">EDIT
                    <small>Meal</small>
                </h1>
				
				<?php
					if(isset($_GET['delete'])){
							$delete_id=$_GET['delete'];
							$mysqli=new mysqli('localhost','root','','zomato');
								$query=$mysqli->query("Delete from meals where ID='$delete_id'");
								header("location: menu.php");
	}


?>
				
				<?php
					$id=$_GET['idx'];
					$mysqli=new mysqli('localhost','root','','zomato');
					$query=$mysqli->query("select * from meals where ID='$id' limit 0,1");
					$row=$query->fetch_assoc();
				
				
				
				if(isset($_POST['update'])){
					$t1=$_POST['id'];
					$t2=$_POST['mname'];
					$t3=$_POST['category'];
					$t4=$_POST['cat2'];
					$t5=$_POST['cost'];
					$t6=$_POST['file'];
					$t7=$_POST['message'];
					$result=$mysqli->query("update meals set mname='$t2',category1='$t3',category2='$t4',cost='$t5',file='$t6',message='$t7' where ID='$t1'");
					if($result){
				
				
				
				
				?>
				
				<div class="alert alert-success alert-dismissible" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
			   <strong>success!</strong>your data has been updated.
            </div>
			
					<?php} else{?>
						<div class="alert alert-success alert-dismissible" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
			   <strong>success!</strong>your data has been updated.
            </div>
						
				<?php 
				} 
				} 
				?>
        </div>
        <!-- /.row -->

        <div class="container">
			 <div class="row">
			  <div class="col-md-2"></div>
            <div class="col-md-8">
               
               <form method="POST">
			    <div class="control-group form-group" id="content1">
                        <div class="controls">
                            <label>Meal ID:</label>
                            <input type="text" class="form-control" name="id" value="<?php echo $row['ID']?>" readonly>
                            <p class="help-block"></p>
                        </div>
                    </div>

                    <div class="control-group form-group" id="content1">
                        <div class="controls">
                            <label>Meal name:</label>
                            <input type="text" class="form-control" name="mname" value="<?php echo $row['mname']?>">
                            <p class="help-block"></p>
                        </div>
                    </div>
                   
                   <div class="control-group form-group">
                        <div class="controls">
                            <label>Category:</label>
                            <select id="category" class="form-control" name="category" value="<?php echo $row['category1']?>">
								<optgroup>
									
										
									<option value="Main">MAIN COURSE</option>
									<option value="Sweets">Sweets</option>
										<option value="Desserts" >Desserts</option>
										<option value="snacks" >Snacks</option>
										
				
				</optgroup>
				</select>
                        </div>
                    </div>
					
					
					  <div class="control-group form-group">
                        <div class="controls">
                            <label>Veg Or Non-veg:</label>
                            <select id="cat2" class="form-control" name="cat2" value="<?php echo $row['category2']?>">
								<optgroup>
									
									<option value="veg">Veg</option>
									<option value="non-veg">Non-Veg</option>
										
										
				
				</optgroup>
				</select>
                        </div>
                    </div>
					
							
					
					
					
					
					
					<div class="control-group form-group">
                        <div class="controls">
                            <label>Meals Cost:</label>
                            <input type="text" class="form-control" name="cost" value="<?php echo $row['cost']?>">
                        </div>
                    </div>
					
					
					
					<div class="control-group form-group"id="content8">
                        <div class="controls">
                            <label>Meal picture:</label>
                            <input type="file" class="form-control" name="file" value="<?php echo $row['file']?>">
                        </div>
                    </div>
					
					
					
					
					
					
					
                    <div class="control-group form-group"id="content9">
                        <div class="controls">
                            <label>Meal Item description:</label>
                            <input type="text" class="form-control" name="message" maxlength="999" style="resize:none" value="<?php echo $row['message']?>"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                  <button type="submit" class="btn btn-primary" name="update">Update</button>
                </form>
            </div>
			 <div class="col-md-2"></div>

        </div>
        <!-- /.row -->
		
		
		
		</div>
        <hr>

        <!-- Footer -->
       

    </div>
	</div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
