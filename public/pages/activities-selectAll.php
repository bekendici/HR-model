<?php
	$return_arr = array();
	//$mysqli = new mysqli("localhost", "root", "nermana", "hrmodel");
	require_once ("c:/xampp/htdocs/hrmodel/connection.php");
	$query = "SELECT aktivnosti.naziv,aktivnosti.opis,aktivnosti.kategorija,aktivnosti.datum,aktivnosti.vrijeme, SUBSTRING(datum, 6, 2) mjesec
	FROM aktivnosti";

	if ($result = mysql_query($query)) {
		/* fetch associative array */
		while ($row = mysql_fetch_assoc($result)) {
			$return_arr[] = $row;
		}
	}
    $newarr = json_encode($return_arr);//format the array into json data
	echo $newarr;
?>