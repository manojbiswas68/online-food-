<?php
include('admin_panel.php');
require 'db.php';
if(isset($_GET['edit'])){
 $id = $_GET['edit'];
 require 'db.php';

$q = "select * from cust_reg where cust_id = '$id'";

$result = mysqli_query($conn, $q);
if(!$result)
	die(mysqli_error($conn));

     
       while($row = mysqli_fetch_array($result)){
          $name       = $row['fname']; 
          $email      = $row['email'];
          $password   = $row['pass'];
          $mobile     = $row['mobile'];
          $city       = $row['city'];
          $address    = $row['address'];

       }
}

?>

<html>

<style>
	h2{text-align: center; text-decoration-color: red; margin-bottom: 30px; margin-top: 30px;}
    
</style>
<body>
<div class="container">
 <h2>UPDATE CUSTOMERS DETAILS</h2>
 <form method = "post" action = "">
     <input type="hidden" name="id" value="<?php echo $id?>" autocomplete="off">
  <div class="form-group">
 	  <label for="name">Name: </label>
 	  <input type="text" name="uname" class="form-control" id="name" value = '<?php echo $name?>' autocomplete="off">
 	</div>
 	
 	<div class="form-group">
 	  <label for="email">Email : </label>
 	  <input type="email" name="uemail" class="form-control" id="email" value= '<?php echo $email ?>' autocomplete="off">
 	</div>
 	
 	<div class="form-group">
 	  <label for="pwd">Password: </label>
 	  <input type="password" name="upass" class="form-control" id="pwd" value= '<?php echo $password ?>' autocomplete="off">
 	</div>
 	
 	<div class="form-group">
 	  <label for="mobileno">Mobile: </label>
 	  <input type="number" name="umobile" class="form-control" id="mobileno" value= '<?php echo $mobile ?>' autocomplete="off">
 	</div>
 	
 	<div class = "form-group">
 	<label for="name">city: </label>
 	  <input type="text" name="ucity" class="form-control" id="mobile" value = '<?php echo $city ?>' autocomplete="off">
 	</div>
 	
 	<div class="form-group">
 	<label for="address">Address: </label>
 	  <input type="text" name="uaddress" class="form-control" id="address" value = '<?php echo $address ?>' autocomplete="off">
 	</div>
    
    <div class="form-group">
    <button class = "btn btn-primary"  type="submit" name="update" >Update</button>
    </div>

 </form>
</div>
</body>
</html>


<?php
require 'db.php';
if(isset($_POST['update'])){
  $id        = $_POST['id'];
  $uemail    = $_POST['uemail'];
  $uname     = $_POST['uname'];
  $upassword = $_POST['upass'];
  $ucontact  = $_POST['umobile'];
  $ucity     = $_POST['ucity'];
  $uaddress  = $_POST['uaddress'];
 
$q = "UPDATE cust_reg SET fname='$uname', email='$uemail', pass='$upassword', mobile= '$ucontact', city='$ucity', address='$uaddress' where cust_id= '$id'";
$result = mysqli_query($conn, $q);
 if(!$result)
  echo mysqli_error($conn);
 else
  header('location: userpanel.php');
 }


?>
