<?php
	$telefon = $_POST['telefon'];
	$grad = $_POST['grad'];
	$adresa = $_POST['adresa'];

	require_once ("..\\connection.php");
	session_start();
	
	$strtel = 'SELECT * FROM korisnici WHERE korisnik_id = "'.$_SESSION['korisnik'].'"';
	$rezultat = mysql_query($strtel)or die(mysql_error());
	$rez = mysql_fetch_array($rezultat);
	
	$sqlstr2 = 'UPDATE korisnici SET telefon="'.provjera($telefon, 'telefon').'", grad_id="'.provjera($grad, 'grad_id').'", adresa="'.provjera($adresa, 'adresa').'" WHERE korisnik_id = "'.$_SESSION['korisnik'].'"';
	
	mysql_query($sqlstr2)or die(mysql_error());
	echo "USPJESNO!!!";

	function provjera($at, $naziv){
		if(!isset($at)){
			$at = $rez[$naziv];
		}
		return $at;		
	}
?>