
<?php
include('admin_panel.php');

?>

<html>

<style>
	h2{text-align: center; text-decoration-color: red; margin-bottom: 30px; margin-top: 30px;}
    
</style>
<body>
<div class="container">
 <h2>REGISTER AS ADMIN</h2>
 <form method = "post" action = "">
  <div class="form-group">
 	  <label for="name">Name: </label>
 	  <input type="text" name="name" class="form-control" id="name" placeholder="name" autocomplete="off">
 	</div>
 	<div class="form-group">
 	  <label for="usrname">User Name: </label>
 	  <input type="text" name="username" class="form-control" id="usrname" placeholder="UserName" autocomplete="off">
 	</div>
 	<div class="form-group">
 	  <label for="pwd">Password: </label>
 	  <input type="password" name="pass" class="form-control" id="pwd" placeholder="password" autocomplete="off">
 	</div>
 	<div class="form-group">
 	  <label for="mobileno">Mobile: </label>
 	  <input type="number" name="mob_no" class="form-control" id="mobileno" placeholder="contact" autocomplete="off">
 	</div>
    <div class="form-group">
    <button class = "btn btn-primary" type="submit" name="register">Register</button>
    </div>
 </form>
</div>
</body>
</html>




<?php
require 'db.php';
if(isset($_POST["register"])){
 	$user = $_POST['username'];
 	$name = $_POST['name'];
 	$password = $_POST['pass'];
 	$contact  = $_POST['mob_no']; 
$q = "insert into admin (name, usrname, password, mob) values ('$name','$user','$password','$contact')";
$result = mysqli_query($conn, $q);
 if(!$result)
 	echo mysqli_error($conn);
echo "<script> confirm('New Admin Registered!'); </script>";
header('location: admin_panel.php');
}

mysqli_close($conn);

?>
