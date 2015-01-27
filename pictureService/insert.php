<?php
	require_once("..\\connection.php");
	session_start();
	$user = $_SESSION['korisnik'];

	$file = $_FILES['imginp']['tmp_name'];
	if (!isset($file)){
		echo "File is not selected";
	}else{
		$image = addslashes(file_get_contents($_FILES['imginp']['tmp_name']));
		$image_size = getimagesize($_FILES['imginp']['tmp_name']);
		$image_type = exif_imagetype($_FILES['imginp']['tmp_name']);
		$echo = $_FILES['imginp'];
		if($image_size==FALSE){
			echo "That is not an image.";
		}else{
			if($image_type == IMAGETYPE_GIF || $image_type == IMAGETYPE_JPEG || $image_type == IMAGETYPE_PNG){
				if(!$insert = mysql_query('UPDATE korisnici SET slika="'.$image.'" WHERE korisnik_id = "'.$_SESSION['korisnik'].'"')){
					echo "Problem uploading image.";
				}else{
					echo "Success!<br>";
					echo "Image uploaded.<p />Your image:<p /><img src=get.php>";
					header('Location: http://localhost/hrmodel/public/index.php#/profile');
				}
			}else{
				echo "Tip slike nije odgovarajuci";	
			}
		}
	}
?>