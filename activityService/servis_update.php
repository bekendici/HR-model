<?php
	$aktivnost_id = $_POST['id_aktivnost'];
	$naziv = $_POST['naziv'];
	$opis = $_POST['opis'];
	$kategorija = $_POST['kategorija'];
	$datum = $_POST['datum'];
	$vrijeme = $_POST['vrijeme'];
	require_once("..\\connection.php");
	
	$sqlstr = 'UPDATE aktivnosti SET naziv="'.$naziv.'", opis="'.$opis.'", kategorija="'.$kategorija.'", datum="'.$datum.'", vrijeme="'.$vrijeme.'" WHERE aktivnost_id="'.$aktivnost_id.'"';
	mysql_query($sqlstr)or die(mysql_error());
	
	echo "Uspjesno";
?>