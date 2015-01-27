<?php
	$conn = mysql_connect('localhost', 'root', '')or die(mysql_error());
	$baza = "hrmodel";
	mysql_select_db($baza, $conn)or die(mysql_error());
	
	//pass  "nermana"
?>