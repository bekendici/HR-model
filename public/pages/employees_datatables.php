<?php
	require_once("C:/xampp/htdocs/hrmodel/connection.php");
	
	$return_arr = array();
	
	$qstring = "SELECT korisnici.korisnik_id,korisnici.ime,korisnici.prezime,gradovi.naziv,drzave.naziv 
				FROM korisnici 
				INNER JOIN 
				(gradovi INNER JOIN drzave 
				ON drzave.drzava_id=gradovi.drzava_id) 
				ON korisnici.grad_id=gradovi.grad_id
				WHERE ime != '".""."' ";

	$result = mysql_query($qstring);//query the database for entries containing the term

	while($row = mysql_fetch_array($result)){
		$return_arr[] = $row;
	}
	$newarr = json_encode($return_arr);//format the array into json data

	echo $newarr;
?>