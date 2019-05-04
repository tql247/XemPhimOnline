<?php
	require_once('connFilm.php');
	$sql = "Delete From Detail_Category Where Id_Film = " . $_REQUEST['Id_Film'];
	$connFilm->query($sql);
	$sql = "Delete From Film Where Id_Film = " . $_REQUEST['Id_Film'];
	$connFilm->query($sql);
	$sql = "Delete From Comment Where Id_Film = " . $_REQUEST['Id_Film'];
	$connFilm->query($sql);
	$sql = "Delete From Save_Film Where Id_Film = " . $_REQUEST['Id_Film'];
	$connFilm->query($sql);
	$sql = "Delete From Film_Eps Where Id_Film = " . $_REQUEST['Id_Film'];
	$connFilm->query($sql);
	$sql = "Delete From Similar Where Id_Film = " . $_REQUEST['Id_Film'];
	$connFilm->query($sql);
	$connFilm->close();
	header("Location: Admin_Listing.php");
?>