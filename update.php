<?php
	$Id_Film = $_REQUEST['Id_Film'];
	// echo '$Id_Film = $_REQUEST['Id_Film']';
	$Name_Film = $_POST['Name'];
	$YearRelease = $_POST['YearRelease'];
	$Manufacturer = $_POST['Manufacturer'];
	$Author = $_POST['Author'];
	
	$Cover_address = "upload/cover/" . $_FILES['Cover']['name'];
	move_uploaded_file($_FILES['Cover']['tmp_name'], $Cover_address);
	
	$Eps_Number = $_POST['Eps_Number'];
	$Content = $_POST['Content'];
	
	require_once('connFilm.php');
	
	
	
	if ($Cover_address == "upload/cover/")
		$sql = "UPDATE `film` SET `Name_Film`= '" . $Name_Film . "',`YearRelease`= '" . $YearRelease . "',`Manufacturer`= '" . $Manufacturer . "',`Author`= '" . $Author . "',`Eps_Number`= '" . $Eps_Number . "',`Content`= '" . $Content . "' WHERE `Id_Film` = '" . $Id_Film . "'";
	else
		$sql = "UPDATE `film` SET `Name_Film`= '" . $Name_Film . "',`YearRelease`= '" . $YearRelease . "',`Manufacturer`= '" . $Manufacturer . "',`Author`= '" . $Author . "',`Eps_Number`= '" . $Eps_Number . "',`Cover_address`= '" . $Cover_address . "',`Content`= '" . $Content . "' WHERE `Id_Film` = '" . $Id_Film . "'";
	// . $Cover_address . "',`Content`= '" 
	
	$connFilm->query($sql);
	
	$sql = "Delete From Detail_Category where Id_Film = " . $Id_Film;
	$connFilm->query($sql);
	
	$sql = "Insert into Detail_Category(Id_Film, Id_Category) values(?, ?)";
	foreach ($_POST['Category'] as $Id_Category)	{
		$stmt = $connFilm->prepare($sql);
		$stmt->bind_param("dd", $Id_Film, $Id_Category);
		$stmt->execute();
	}
	
	header("Location: Admin_Listing.php")
?>