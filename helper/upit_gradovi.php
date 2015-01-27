<?php
	$id_drzava = $_POST['value'];
	require_once("..\\connection.php");
	$rezultat = mysql_query("SELECT * FROM gradovi Where drzava_id = $id_drzava");
	while($red = mysql_fetch_array($rezultat)){
		echo "<option value='".$red["grad_id"]."'>".$red["naziv"]."</option>";
	}
	mysql_free_result($rezultat);
?>