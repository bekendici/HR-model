<?php
	$rodjenje_datum = $_POST['date_of_birth'];
	$grad = $_POST['city'];
	$drzava = $_POST['state'];
	$ime = $_POST['firstname'];
	$prezime = $_POST['lastname'];
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$email = $_POST['email'];
	
	$jmbg = $_POST['jmbg'];
	$fakultet = $_POST['college'];
	$adresa = $_POST['address'];
	$telefon = $_POST['phone_number'];
	
	$datum_dan = substr($rodjenje_datum, 0, 2);
	$datum_mjesec = substr($rodjenje_datum, 3, 2);
	$datum_godina = substr($rodjenje_datum, 6, 4);
	
	$rodjenje_string = strtotime($datum_dan."-".$datum_mjesec."-".$datum_godina);
	$rodjenje = date('Y-m-d', $rodjenje_string);
	
	require_once ("..\\connection.php");
	
	$sqlstr1 = 'SELECT korisnicko_ime FROM korisnici WHERE korisnicko_ime = "'.$user.'"';
	
	$rezultat = mysql_query($sqlstr1)or die(mysql_error());
	$zapis = mysql_fetch_array($rezultat);
	
	if($zapis != null){
		echo "Taj korisnik vec postoji!";	
	}else{
		require_once ("mail.php");
	}
?>