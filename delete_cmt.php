<?php
	require_once('connFilm.php');
	$sql = "Delete From Comment Where Id_Comment = " . $_REQUEST['Id_Comment'];
	$connFilm->query($sql);
	$connFilm->close();
	header("Location: Manager_Cmt.php");
?>