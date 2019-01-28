
<html>
<?php
include('admin_panel.php');

?>
<style>
  h2{text-align: center; color: red; margin-bottom: 30px; margin-top: 30px;}
    
</style>
<body>
<div class="container">
 <h2>ADD NEW CUSTOMER</h2>
 <form method = "post" action = "">
  <div class="form-group">
    <label for="name">Name: </label>
    <input type="text" name="uname" class="form-control" id="name"  autocomplete="off">
  </div>
  
  <div class="form-group">
    <label for="email">Email : </label>
    <input type="email" name="uemail" class="form-control" id="email"  autocomplete="off">
  </div>
  
  <div class="form-group">
    <label for="pwd">Password: </label>
    <input type="password" name="upass" class="form-control" id="pwd"  autocomplete="off">
  </div>
  
  <div class="form-group">
    <label for="mobileno">Mobile: </label>
    <input type="number" name="umobile" class="form-control" id="mobileno"  autocomplete="off">
  </div>
  
  <div class = "form-group">
  <label for="name">city: </label>
    <input type="text" name="ucity" class="form-control" id="mobile"  autocomplete="off">
  </div>
  
  <div class="form-group">
  <label for="address">Address: </label>
    <input type="text" name="uaddress" class="form-control" id="address"  autocomplete="off">
  </div>
    
    <div class="form-group">
    <button class = "btn btn-primary"  type="submit" name="add" >ADD</button>
    </div>
  </form>
</div>
</body>
</html>


<?php
require 'db.php';
if(isset($_POST['add'])){
  $uemail    = $_POST['uemail'];
  $uname     = $_POST['uname'];
  $upassword = $_POST['upass'];
  $ucontact  = $_POST['umobile'];
  $ucity     = $_POST['ucity'];
  $uaddress  = $_POST['uaddress'];


 
  $q = "INSERT INTO cust_reg (fname, email, pass, mobile, city, address) VALUES ('$uname', '$uemail','$upassword','$ucontact','$ucity','$uaddress')";

    $result = mysqli_query($conn, $q);
    if(!$result){
      
      echo mysqli_error($conn);
    } 
    else{
      header('location: userpanel.php'); 
    }
  }
 
 ?>
