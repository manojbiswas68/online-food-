<?php 
include('db.php');

if(isset($_POST["submit"]))
{
    $x=$_POST['cid'];
	$file_name=$_FILES['file']['name'];
	$file_type=$_FILES['file']['type'];
	$file_size=$_FILES['file']['size'];
	$file_tmp_loc=$_FILES['file']['tmp_name'];
	$file_error=$_FILES['file']['error'];
	

	$file_ext= explode('.',$file_name);
	$file_actual_ext= strtolower(end($file_ext));

	$allowed = array('jpg','jpeg','png','pdf','txt');

	if(in_array($file_actual_ext, $allowed)){
		if($file_error === 0){
			if($file_size<1000000){
				$file_new_name = uniqid('',true).".".$file_actual_ext;
				$file_store="images/".$file_new_name;
				$qry = "INSERT INTO upload (file_name, path,c_id,fcty_email) VALUES ('$file_name','$file_store','$x','$user')";
				if (mysqli_query($conn,$qry)) 
    			{
					echo "New record created successfully";
					move_uploaded_file($file_tmp_loc,$file_store);
        			header('location: boxcust.php?File_uploaded_successfully');
    			}
    			else 
        			{
            			echo "Error: " . $qry . "<br>" . mysqli_error($conn);
        			}
				if(move_uploaded_file($file_tmp_loc,$file_store)){
					echo "<script>
									alert('File Uploaded!');
									window.location.href='test3.php';
							</script>";
					}

			}else{
				echo "<script>
alert('Your File is To Big!');
window.location.href='test3.php';
</script>";
			}

		}else{
			echo "<script>
alert('There was an Error Uploading Your File!');
window.location.href='test3.php';
</script>";
		}

	}else{
		echo "<script>
alert('Can not Upload this type of file!');
window.location.href='test3.php';
</script>";
	}
 		
}

?>
