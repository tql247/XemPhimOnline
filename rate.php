<?php
	$Id_Film = $_POST['Id_Film'];
	$Id_User = $_POST['Id_User'];
	$rate = $_POST['rate'];
	
	$sql = "SELECT * FROM rate where Id_Film = " . $Id_Film . " and Id_User = " . $Id_User;
	
	require_once('connFilm.php');
	$result = $connFilm->query($sql);
	
	if ($result->num_rows > 0)	{
		$connFilm->query("Update rate set Value = " . $rate . " where Id_Film = " . $Id_Film . " and Id_User = " . $Id_User);
	} else {
		$connFilm->query("Insert into rate value(" . $Id_Film . "," . $Id_User . "," . $rate . ")");
	}
?>