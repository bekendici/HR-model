<?php
	require_once("..\\connection.php");
	$rezultat = mysql_query("SELECT * FROM drzave");
	while($red = mysql_fetch_array($rezultat)){
		echo "<option value='".$red["drzava_id"]."'>".$red["naziv"]."</option>";
	}
?>

