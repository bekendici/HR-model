<?php
	require_once("C:/xampp/htdocs/hrmodel/connection.php");
	session_start();
	$user = $_SESSION['korisnik'];
	
	$rezultat = mysql_query("SELECT * FROM korisnici Where korisnik_id = $user");	
	$red = mysql_fetch_array($rezultat);
	
	// Dohvatanje grada
	$rezultat2 = mysql_query('SELECT * FROM gradovi Where grad_id = "'.$red['grad_id'].'"');
	$red2 = mysql_fetch_array($rezultat2);
	//Dohvatanje drzave
	$rezultat3 = mysql_query('SELECT * FROM drzave Where drzava_id = "'.$red2['drzava_id'].'"');
	$red3 = mysql_fetch_array($rezultat3);
	//Dohvatanje fakulteta
	$rezultat4 = mysql_query('SELECT * FROM fakulteti Where fakultet_id = "'.$red['fakultet_id'].'"');
	$red4 = mysql_fetch_array($rezultat4);
?>