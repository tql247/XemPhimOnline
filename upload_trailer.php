<?php
	if ($_FILES['Trailer']['name'] != "")	{
		$Id_Film = $_REQUEST['Id_Film'];
		
		require_once('connFilm.php');
		
		$Direct = "upload/trailer/" . $_FILES['Trailer']['name'];
		move_uploaded_file($_FILES['Trailer']['tmp_name'], $Direct);
		
		$sql = "SELECT * FROM Trailer where Id_Film = " . $Id_Film;
		$result = $connFilm->query($sql);
		
		if ($result->num_rows > 0) {
			$sql = "Update Trailer set Trailer = '". $Direct . "' Where Id_Film = " . $Id_Film;
			$connFilm->query($sql);
		} else {
			$sql = "Insert into Trailer(Id_Film, Trailer) values(?, ?)";
			$stmt = $connFilm->prepare($sql);	
			$stmt->bind_param("ds", $Id_Film, $Direct);
			$stmt->execute();
		}
	}
	header("Location: Admin_Listing.php");
?>