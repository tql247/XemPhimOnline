<?php
	$Name_Account = $_REQUEST['Name_Account'];
	$Pw = $_REQUEST['Password'];
	
	require_once('connFilm.php');

	$sql = "Select * From Account Where Name_Account like '" . $Name_Account . "' and Password like '" . $Pw . "'";
	
	$result = $connFilm->query($sql);
	
	
	
	if ($result->num_rows > 0) {
		header("Location: Signin.php");
	} else {
		$sql = "Insert into Account(Name_Account, Password) Values(?,?)";
		$stmt = $connFilm->prepare($sql);	
		$stmt->bind_param("ss", $Name_Account, $Pw);
		$stmt->execute();
		header("Location: Login.php");
	}
	$connFilm->close();
?>