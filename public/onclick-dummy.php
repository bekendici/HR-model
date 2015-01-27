<?php
	require_once("..\\connection.php");
	$return_arr = array();
	$term = mysql_real_escape_string($_POST['user_id']);//retrieve the search term that autocomplete sends
	echo ($term);
?>