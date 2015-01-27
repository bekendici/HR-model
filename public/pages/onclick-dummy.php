<?php
	$term = 23;
	require_once ("c:/xampp/htdocs/hrmodel/connection.php");
	
	$rezultat = mysql_query("SELECT * FROM korisnici Where korisnik_id = $term");
	$red['korisnik'] = mysql_fetch_assoc($rezultat);
	
	// Dohvatanje grada
	$rezultat2 = mysql_query('SELECT * FROM gradovi Where grad_id = "'.$red['korisnik']['grad_id'].'"');
	$red['korisnik_grad'] = mysql_fetch_array($rezultat2);
	// Dohvatanje drzave
	$rezultat3 = mysql_query('SELECT * FROM drzave Where drzava_id = "'.$red['korisnik_grad']['drzava_id'].'"');
	$red['korisnik_drzava'] = mysql_fetch_array($rezultat3);
	// Dohvatanje fakulteta
	$rezultat4 = mysql_query('SELECT * FROM fakulteti Where fakultet_id = "'.$red['korisnik']['fakultet_id'].'"');
	$red['korisnik_fakultet'] = mysql_fetch_array($rezultat4);	

	$red[] = $red['korisnik'];
	$red2[] = $red['korisnik_grad'];
	$red3[] = $red['korisnik_drzava'];
	$red4[] = $red['korisnik_fakultet'];
?>