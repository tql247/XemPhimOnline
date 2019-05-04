<?php
	require_once('connFilm.php');
	$sql = "Delete From Film_Eps Where Id_Film = " . $_REQUEST['Id_Film'];
	$connFilm->query($sql);
	$connFilm->close();
	header("Location: Admin_Listing.php");
?>