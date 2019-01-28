
<?php
echo "enter";
require 'db.php';

if(isset($_POST['login'])){
  $user = $_POST['username'];
  $password = $_POST['password'];

  
  $q = "select * from admin where usrname = '$user' and password = '$password'  ";
  $result = mysqli_query($conn, $q);
  if(!$result)
    echo mysqli_error($conn);

  $row = mysqli_num_rows($result);
  if($row == 1){
    $check = mysqli_fetch_assoc($result);
    if($user == $check['usrname'] && $password == $check['password']){
      session_start();
      $_SESSION['admin_user'] = $user; 
      header('location: admin_panel.php');
    }
    else{
      echo "Invalid Username or Password";
      echo '<a href="headerExp.php">go back</a>';
    }
  }
  else{echo "uncsessfull";}

}
?>
