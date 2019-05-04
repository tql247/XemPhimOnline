<?php
	$Name = $_POST['Name'];
	$YearRelease = $_POST['YearRelease'];
	$Manufacturer = $_POST['Manufacturer'];
	$Author = $_POST['Author'];
	
	$Cover_address = "upload/cover/" . $_FILES['Cover']['name'];
	move_uploaded_file($_FILES['Cover']['tmp_name'], $Cover_address);
	
	$Eps_Number = $_POST['Eps_Number'];
	$Content = $_POST['Content'];
	$View = "0";
	
	require_once('connFilm.php');
	
	$sql = "Insert into Film(Name_Film, YearRelease, Manufacturer, Author, Eps_Number,Cover_address, Content, ViewNumber) values(?, ?, ?, ?, ?, ?, ?, ?)";
	$stmt = $connFilm->prepare($sql);	
	$stmt->bind_param("sssssssd", $Name, $YearRelease, $Manufacturer, $Author, $Eps_Number, $Cover_address, $Content, $View);
	$stmt->execute();
	
	
	$result = $connFilm->query("SELECT * From Film Where Id_Film = (SELECT Max(Id_Film) From Film)");
	$row = $result->fetch_assoc();
	$Id_Film = $row['Id_Film'];
	
	$sql = "Insert into Similar(Id_Film, Value) values(?, ?)";
	$Value = "0";
	$stmt = $connFilm->prepare($sql);
	$stmt->bind_param("dd", $Id_Film, $Value);
	$stmt->execute();
	
	$sql = "Insert into Detail_Category(Id_Film, Id_Category) values(?, ?)";
	foreach ($_POST['Category'] as $Id_Category)	{
		$stmt = $connFilm->prepare($sql);
		$stmt->bind_param("dd", $Id_Film, $Id_Category);
		$stmt->execute();
	}
	
	echo "<br><a href='admin_upload.php'>upload new</a>";
	echo "<br><a href='Admin_listing.php'>listing</a>";
?>