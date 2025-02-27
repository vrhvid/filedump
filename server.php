<?php																							//prirejeno po https://www.w3schools.com/php/php_file_upload.asp			
	$target_file = "filedump/" . $_FILES["uploadedfile"]["name"]

	move_uploaded_file($_FILES["uploadedfile"]["tmp_name"], $target_file);

?>