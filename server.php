<?php																						
	$target_file = __DIR__ . "/filedump/" . $_FILES["uploadedfile"]["name"];
	move_uploaded_file($_FILES["uploadedfile"]["tmp_name"], $target_file);
?>