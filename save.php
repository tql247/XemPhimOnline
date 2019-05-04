<?php
	$Id_Film = $_REQUEST['Id_Film'];
	$Id_User = $_REQUEST['Id_User'];
	
	require_once('connFilm.php');
	
	$sql = "Select * From Save_Film where Id_Film = " . $Id_Film . " and Id_User = " . $Id_User;
	$result = $connFilm->query($sql);
	if ($result->num_rows > 0)	{	
		header("Location: savepage.php");
		exit();
	}
	
	$sql = "Insert into Save_Film(Id_User, Id_Film) Values(?, ?)";
	$stmt = $connFilm->prepare($sql);	
	$stmt->bind_param("dd", $Id_User, $Id_Film);
	$stmt->execute();
	
	$connFilm->close();
	
	header("Location: savepage.php");
?>