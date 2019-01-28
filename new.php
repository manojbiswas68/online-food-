<?php
include('db.php');



echo '<form action="file_upload.php" enctype="multipart/form-data" method="POST">

File Upload: <input type="file" name="file">

<button type="submit" name="submit" class="btn btn-sm"> Upload</button>
</form>';


?>