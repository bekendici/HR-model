<?php
	$stari_pass = md5($_POST['stara_lozinka']);
	$novi_pass = md5($_POST['nova_lozinka']);
	
	require_once("..\\connection.php");
	session_start();
	$user = $_SESSION['korisnik'];
	
	$rezultat = mysql_query("SELECT * FROM korisnici Where korisnik_id = $user");
	$red = mysql_fetch_array($rezultat);
	
	if($stari_pass == $red['lozinka']){
		$sqlstr = 'UPDATE korisnici SET lozinka="'.$novi_pass.'" WHERE korisnik_id = "'.$_SESSION['korisnik'].'"';
		mysql_query($sqlstr)or die(mysql_error());
	}else{
		echo "Stara lozinka je pogresna!!!";
	}
?>