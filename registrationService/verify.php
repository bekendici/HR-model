<?php
	require_once ("..\\connection.php");

	$vrijemeregistracije;
	if(isset($_GET["email"]) && !empty($_GET["email"]) AND isset($_GET["hash"]) && !empty($_GET["hash"])){
		// Verify data
		$email = mysql_real_escape_string($_GET['email']); // Set email variable
		$hash = mysql_real_escape_string($_GET['hash']); // Set hash variable
	}
	
	$search = mysql_query("SELECT korisnik_id, email, hash, vrijeme_reg, aktivnost  FROM korisnici WHERE email='".$email."' AND hash='".$hash."'") or die(mysql_error()); 
	$rez = mysql_fetch_array($search);
	
	$vrijemeregistracije = $rez['vrijeme_reg'];
	$trenutnovrijeme = date('Y-m-d G:i:s');

	$raspon = abs(strtotime($trenutnovrijeme) - strtotime($vrijemeregistracije));
	
	if(!$rez['aktivnost'] && $raspon <= 86400){
		$sqlstr2 = 'UPDATE korisnici SET aktivnost=1 WHERE korisnik_id = "'.$rez['korisnik_id'].'"';
		mysql_query($sqlstr2)or die(mysql_error());
	}elseif($rez['aktivnost']){
		echo "vec ste se aktivirali";
	}else{
		echo "niste se aktivirali na vrijeme, dobit cete novi mail, morate se aktivirati u roku 24 casa";
		require_once ("mail.php");
	}
?>