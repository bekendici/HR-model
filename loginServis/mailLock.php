<?php
	$datumLock = date('Y-m-d H:i:s');
	echo $datumLock;
	$sqlstrLock = 'UPDATE korisnici SET datKljuc="'.$datumLock.'", loginAttempt=0 WHERE korisnik_id = "'.$zapis3["korisnik_id"].'"';
	mysql_query($sqlstrLock)or die(mysql_error());	

	$hash = md5( rand(0, 1000));
	$newpass = chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90));
	$hashpass = md5($newpass);
	$sqlstr2 = 'UPDATE korisnici SET lozinka="'.$hashpass.'" WHERE korisnik_id = "'.$zapis3["korisnik_id"].'"';
	
	$to      = $zapis3['email']; // Send email to our user
	$subject = 'New password | Verification'; // Give the email a subject 
	$message = '
		Your new password is created:
		
		Password: '.$newpass.'
 
		Please change your password in next 24 hours:
 
		'; // Our message above including the link
                     
	$headers = 'From:bekendici@gmail.com' . "\r\n"; // Set from headers
	if(mail($to, $subject, $message, $headers)){
		echo "poslano";
	}else{
		echo "nije poslano";
	}

	mysql_query($sqlstr2)or die(mysql_error());
		
	echo "Uspjesno!!!";
	echo $to;
?>