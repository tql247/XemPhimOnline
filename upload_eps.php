<?php
	if ($_FILES['Eps']['name'] != "")	{
		$Id_Film = $_REQUEST['Id_Film'];
		
		require_once('connFilm.php');
		
		$sql = "SELECT count(Eps) as Number_Eps From Film_Eps Where Id_Film = " . $_REQUEST['Id_Film'];
		$result = $connFilm->query($sql);
		$row = $result->fetch_assoc();
		$Eps = $row['Number_Eps'] + 1;
		
		$Direct = "upload/film/" . $_FILES['Eps']['name'];
		move_uploaded_file($_FILES['Eps']['tmp_name'], $Direct);
		
		$sql = "Insert into Film_Eps(Id_Film, Eps, Direct) values(?, ?, ?)";
		$stmt = $connFilm->prepare($sql);	
		$stmt->bind_param("dds", $Id_Film, $Eps, $Direct);
		$stmt->execute();
	}
	header("Location: Admin_Listing.php");
?>