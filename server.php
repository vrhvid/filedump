<?php

	
	$target_dir = "../MEDIA/";																								//prirejeno po https://www.w3schools.com/php/php_file_upload.asp
				
	$target_file = $target_dir . $file;
	$uploadOk = 1;
							
	$check = getimagesize($_FILES["fot"]["tmp_name"]);
	if($check == false) {
		echo 'Datoteka ni fotografija!';
		$uploadOk = 0;
	}

	if (file_exists($target_file)) {
		echo 'Datoteka že obstaja!';
		$uploadOk = 0;
	}

	if ($uploadOk == 1) {
		if (move_uploaded_file($_FILES["fot"]["tmp_name"], $target_file)) {																											//konec prirejeno
			$sql2 = "INSERT INTO letalo (Icao, Registracija, Fotografija, IDModel, Aktivno, Izbrisano) VALUES ('" . $icao . "','" . $registracija . "','" . $file . "','" . $model . "', 1, 0)";
				
			mysqli_query($povezava, $sql2);
			
			echo 'uspeh';
			
		}
	}
?>