<?php
	require_once('connFilm.php');
	$sql = "Delete From Save_Film Where Id_Save = " . $_REQUEST['Id_Save'];
	$connFilm->query($sql);
	$connFilm->close();
	header("Location: savepage.php");
?>