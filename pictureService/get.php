<?php
	require_once("..\\connection.php");
	session_start();
	$user = $_SESSION['korisnik'];

	$query = mysql_query("SELECT slika FROM korisnici WHERE korisnik_id=$user");	
	$row = mysql_fetch_assoc($query);
	$image = $row['slika'];

	header("Content-type: image/jpeg");

	echo $image;
?>