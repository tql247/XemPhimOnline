<?php
	$Name_Account = $_REQUEST['Name_Account'];
	$Pw = $_REQUEST['Password'];
	
	require_once('connFilm.php');

	$sql = "Select * From Account Where Name_Account like '" . $Name_Account . "' and Password like '" . $Pw . "'";
	
	$result = $connFilm->query($sql);
	
	
	
	if ($result->num_rows > 0) {
		session_start();
		$account = $result->fetch_assoc();
		if ($account['Role'] == 'Admin') {
			$_SESSION['Admin'] = true;
			header("Location: Admin_Listing.php");
		} else {
			$_SESSION['User'] = true;
			$_SESSION['Id_User'] = $account['Id_Account'];
			header("Location: hp.php");
		}
	} else
		header("Location: login.php");
	
	$connFilm->close();
?>