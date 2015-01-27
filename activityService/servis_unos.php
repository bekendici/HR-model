<?php
	$naziv = $_POST['naziv'];
	$opis = $_POST['opis'];
	$kategorija = $_POST['kategorija'];
	$datum = $_POST['datum'];
	$vrijeme = $_POST['vrijeme'];
	
	$datum_dan = substr($datum, 0, 2);
	$datum_mjesec = substr($datum, 3, 2);
	$datum_godina = substr($datum, 6, 4);
	
	$datum_string = strtotime($datum_dan."-".$datum_mjesec."-".$datum_godina);
	$datum_aktivnosti = date('Y-m-d', $datum_string);
	
	require_once("C:/xampp/htdocs/hrmodel/connection.php");
	
	$sqlstr = 'INSERT INTO aktivnosti (naziv, opis, kategorija, datum, vrijeme) VALUE ("'.$naziv.'", "'.$opis.'", "'.$kategorija.'", "'.$datum_aktivnosti.'", "'.$vrijeme.'")';
	mysql_query($sqlstr)or die(mysql_error());
?>