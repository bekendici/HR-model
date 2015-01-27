<?php
	$hash = md5( rand(0, 1000));
		
	$hashpass = md5($pass);
	$sqlstr2 = 'INSERT INTO korisnici (ime, prezime, korisnicko_ime, lozinka, grad_id, datum_rodjenja, hash, email, JMBG, fakultet_id, adresa, telefon) VALUE ("'.$ime.'", "'.$prezime.'", "'.$user.'", "'.$hashpass.'", "'.$grad.'", "'.$rodjenje.'", "'.$hash.'", "'.$email.'", "'.$jmbg.'", "'.$fakultet.'", "'.$adresa.'", "'.$telefon.'")';
	
	$to      = $email; // Send email to our user
	$subject = 'Signup | Verification'; // Give the email a subject 
	$message = '
		Thanks for signing up!
		Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
 
		Please click this link to activate your account:
		http://localhost/hrmodel/registrationService/verify.php?email='.$email.'&hash='.$hash.'
 
		'; // Our message above including the link
                     
	$headers = 'From:bekendici@gmail.com' . "\r\n"; // Set from headers
	if(mail($to, $subject, $message, $headers)){
		echo "poslano";
		echo $rodjenje;
	}else{
		echo "nije poslano";
	}

	mysql_query($sqlstr2)or die(mysql_error());
	echo "Uspjesno!!!";
?>