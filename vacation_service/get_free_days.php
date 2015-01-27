<?php
	require_once("..\\connection.php");
	//$term = mysql_real_escape_string($_REQUEST['user_id']);
	$godina = date("Y");
	
	$query_korisnici = mysql_query("SELECT korisnik_id FROM korisnici");	
	while($row_korisnici = mysql_fetch_assoc($query_korisnici)){
		$aj_di_evi[] = $row_korisnici['korisnik_id'];   // SVI KORISNICI
	}	

	$vacation1 = array();

	for($i=0; $i<count($aj_di_evi); $i++){
	
		/*-----SLOBODNI DANI I BOLOVANJE ZA JEDNOG ZAPOSLENOG-----*/	
		$qstring = "SELECT korisnici.korisnik_id,korisnici.ime,korisnici.prezime
		FROM korisnici
		WHERE ime != '".""."'  && korisnici.korisnik_id = $aj_di_evi[$i]";

		$result = mysql_query($qstring);
		$row_licni_podaci = mysql_fetch_assoc($result);
		$query = mysql_query("SELECT vacationID FROM vacation WHERE korisnik_id=$aj_di_evi[$i] && godina=$godina");		
		$row = mysql_fetch_assoc($query);
		$vacation = $row['vacationID'];

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
		$broj_dana_godisnjeg = $broj_iskoristenih + $broj_slobodnih; // broj dana godisnjeg
		/*--GODISNJI ODMOR--*/

		/*--BOLOVANJE--*/
		$datumi_bolovanje_slobodni = array();
		$query4 = mysql_query("SELECT datum FROM dani_bolovanje WHERE vacationID=$vacation && iskoristen=0");
		if(!empty($query4)){
			while($row4 = mysql_fetch_assoc($query4)){
				$datumi_bolovanje_slobodni[] = $row4['datum'];   // array datuma slobodnih dana BOLOVANJA
			}
			$broj_slobodnih_dana_bolovanja = (isset($datumi_bolovanje_slobodni)) ? count($datumi_bolovanje_slobodni) : 0; // broj slobodnih dana BOLOVANJA
		}else{
			$broj_slobodnih_dana_bolovanja = 0;
		}

		$danasnji_datum = date('Y-m-d');
		$jeli_na_bolovanju="NE";
		$jeli_na_godisnjem="NE";

		if($datumi_slobodni != null){
			foreach($datumi_slobodni as $godisnji){
				if($godisnji == $danasnji_datum){
					$jeli_na_godisnjem = "DA";
				}	
			}
		}

		if($datumi_bolovanje_slobodni != null){
			foreach($datumi_bolovanje_slobodni as $bolovanje){
				if($bolovanje == $danasnji_datum){
					$jeli_na_bolovanju = "DA";
				}
			}
		}
		/*---BOLOVANJE---*/

		$keys = array('user_id', 'ime', 'prezime', 'broj_dana_godisnjeg', 'broj_iskoristenih_dana', 'trenutno_na_godisnjem', 
		'preostalo_dana_godisnjeg', 'broj_dana_bolovanja', 'trenutno_na_bolovanju');

		$values = array($row_licni_podaci['korisnik_id'], $row_licni_podaci['ime'], $row_licni_podaci['prezime'], $broj_dana_godisnjeg, 
		$broj_iskoristenih, $jeli_na_godisnjem, $broj_slobodnih, $broj_slobodnih_dana_bolovanja, $jeli_na_bolovanju);
		$vacation1 = array_combine($keys, $values);
		$vacation_full[] = $vacation1;
	}

	echo json_encode($vacation_full);
?>