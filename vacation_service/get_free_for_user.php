<?php
	require_once("..\\connection.php");
	$term = mysql_real_escape_string($_POST['user_id']);
	$godina = date("Y");
	$vacation1 = array();

	$qstring = "SELECT korisnici.korisnik_id,korisnici.ime,korisnici.prezime
	FROM korisnici
	WHERE ime != '".""."'  && korisnici.korisnik_id = $term";
	
	$result = mysql_query($qstring);
	$row_licni_podaci = mysql_fetch_assoc($result);
	echo $row_licni_podaci['ime'];

	$query = mysql_query("SELECT vacationID FROM vacation WHERE korisnik_id=$term && godina=$godina");
	$row = mysql_fetch_assoc($query);

	$vacation = $row['vacationID'];
	echo $vacation;

	/*--GODISNJI ODMOR--*/
	$datumi_slobodni = array();
	$query2 = mysql_query("SELECT datum FROM dani_godisnji WHERE vacationID=$vacation && iskoristen=0");
	if(!empty($query2)){
		while($row2 = mysql_fetch_assoc($query2)){
			$datumi_slobodni[] = $row2['datum'];   // array datuma slobodnih dana
		}
		$broj_slobodnih = (isset($datumi_slobodni)) ? count($datumi_slobodni): 0; // broj slobodnih dana
	}else{
		$broj_slobodnih = 0;
	}

	$datumi_iskoristeni = array();
	$query3 = mysql_query("SELECT datum FROM dani_godisnji WHERE vacationID=$vacation && iskoristen=1");
	if(!empty($query3)){
		while($row3 = mysql_fetch_assoc($query3)){
			$datumi_iskoristeni[] = $row3['datum'];   // array datuma iskoristenih dana
		}
		$broj_iskoristenih = (isset($datumi_iskoristeni)) ? count($datumi_iskoristeni) : 0; // broj iskoristenih dana
	}else{
		$broj_iskoristenih = 0;
	}

	$keys = array('id', 'ime', 'prezime', 'datumi_iskoristeni', 'datumi_slobodni');
	$values = array($row_licni_podaci['korisnik_id'], $row_licni_podaci['ime'], $row_licni_podaci['prezime'], $datumi_iskoristeni, $datumi_slobodni);
	$vacation1 = array_combine($keys, $values);
	$vacation_full[] = $vacation1;

	echo json_encode($vacation_full);
?>