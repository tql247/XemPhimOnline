<?php
	require_once('connFilm.php');
    $sql = "Delete From Account Where Id_Account = " . $_REQUEST['Id_Account'];
    echo $sql;
	$connFilm->query($sql);
	$connFilm->close();
	header("Location: Manager_User.php");
?>