<?php
	session_start();
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$hashpass = md5($pass);

	require_once ("..\\connection.php");
	
	$upit = 'SELECT * FROM korisnici WHERE korisnicko_ime = "'.$user.'" AND lozinka = "'.$hashpass.'"';
	$rezultat = mysql_query($upit)or die(mysql_error());
	$zapis = mysql_fetch_array($rezultat);
	
	if($zapis != null){
		$_SESSION["korisnik"]=$zapis["korisnik_id"];
		header('Location: ..\\public/index.php');
	}else{
			/*---------Provjera na nivou baze----------------*/
	
		$upit3 = 'SELECT * FROM korisnici WHERE korisnicko_ime = "'.$user.'"';
		$rezultat3 = mysql_query($upit3)or die(mysql_error());
		$zapis3 = mysql_fetch_array($rezultat3);
		if($zapis3 != null){	
			$upit_brojac = 'SELECT loginAttempt FROM korisnici WHERE korisnicko_ime = "'.$user.'"';
			$rezultat_brojac = mysql_query($upit_brojac)or die(mysql_error());
			$zapis_brojac = mysql_fetch_array($rezultat_brojac);
			
			$brojac = $zapis_brojac["loginAttempt"];
			if($brojac < 4){
					$brojac ++;
					$sqlstr3 = 'UPDATE korisnici SET loginAttempt="'.$brojac.'" WHERE korisnik_id = "'.$zapis3["korisnik_id"].'"';
					mysql_query($sqlstr3)or die(mysql_error());
					header("Location: ..\\public/login.html");
			}else{	
				require_once("mailLock.php");				
			}
		}
	}
?>