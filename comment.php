<?php
	require_once('connFilm.php');
	$sql = "Insert into Comment(Id_Film, Id_User, Content) Values(?, ?, ?)";
	
	$stmt = $connFilm->prepare($sql);	
	$stmt->bind_param("dds", $_REQUEST['Id_Film'], $_REQUEST['Id_User'], $_REQUEST['Content']);
	$stmt->execute();
	$connFilm->close();
?>