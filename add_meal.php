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




</style>

<body>

    <!-- Navigation -->


    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Register
                    <small>as Customer</small>
                </h1>
               
            </div>
        </div>
        <!-- /.row -->

        <div class="container">
			 <div class="row">
			  <div class="col-md-2"></div>
            <div class="col-md-8">
               
                <form name="sentMessage" id="contactForm" novalidate id="content1">
                    <div class="control-group form-group" id="content1">
                        <div class="controls">
                            <label>Restaurant Name:</label>
                            <input type="text" class="form-control" id="uname" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group" id="content2">
                        <div class="controls">
                            <label>Email:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your Email Id.">
                        </div>
                    </div>
                    <div class="control-group form-group" id="content3">
                        <div class="controls">
                            <label>Password:</label>
                            <input type="password" class="form-control" id="password" required data-validation-required-message="Please enter your Password.">
                        </div>
                    </div>
					 <div class="control-group form-group" id="content4">
                        <div class="controls">
                            <label>Confirm Password:</label>
                            <input type="cpassword" class="form-control" id="cpassword" required data-validation-required-message="Please confirm your Password.">
                        </div>
                    </div>
					
					<div class="control-group form-group"id="content5">
                        <div class="controls">
                            <label>Mobile:</label>
                            <input type="mobile" class="form-control" id="mobile" required data-validation-required-message="Please enter your mobileNO.">
                        </div>
                    </div>
					
					
					
					
					
					<div class="control-group form-group"id="content6">
                        <div class="controls">
                            <label>city:</label>
                            <input type="mobile" class="form-control" id="mobile" required data-validation-required-message="Please enter your city.">
                        </div>
                    </div>
					
					<div class="control-group form-group" id="content7">
                        <div class="controls">
                            <label>state:</label>
                            <input type="state" class="form-control" id="state" required data-validation-required-message="Please enter your state.">
                        </div>
                    </div>
					
					<div class="control-group form-group"id="content8">
                        <div class="controls">
                            <label>Upload picture:</label>
                            <input type="file" class="form-control" id="file">
                        </div>
                    </div>
					
					
					
					
					
					
					
                    <div class="control-group form-group"id="content9">
                        <div class="controls">
                            <label>Address:</label>
                            <textarea rows="4" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your Address" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
			 <div class="col-md-2"></div>

        </div>
        <!-- /.row -->
		
		
		
		</div>
        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
