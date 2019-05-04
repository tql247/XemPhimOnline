<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="icon" href="images/logobar.png">
    <title>Admin upload</title>
	
	<style>
		textarea {
			width: 100%;
			height: 100px;
		}
	</style>
  </head>
  <body>
	<div algin="center">
		<h2>Sửa Phim</h2>
		<?php
			require_once('connFilm.php');
			$sql = "SELECT * From Film Where Id_Film = " . $_REQUEST['Id_Film'];
			$result = $connFilm->query($sql);
			$row = $result->fetch_assoc();
		?>
		<form action="update.php?Id_Film=<?= $row['Id_Film'] ?>" method="POST" enctype="multipart/form-data">
			Tên phim: <input name="Name" type="text" placeholder="<?= $row['Name_Film'] ?>"> <br>
			Năm sản xuất: <input name="YearRelease" type="text" placeholder="<?= $row['YearRelease'] ?>"> <br>
			Hãng sản xuất: <input name="Manufacturer" type="text" placeholder="<?= $row['Manufacturer'] ?>"> <br>
			Tác giả: <input name="Author" type="text" placeholder="<?= $row['Author'] ?>"> <br>
			Thể loại: <br>
			<input type="checkbox" name="Category[]" value="1">TV series
			<input type="checkbox" name="Category[]" value="2">Movies
			<input type="checkbox" name="Category[]" value="3">Ova
			<input type="checkbox" name="Category[]" value="4">Tập đặc biệt<br>
			<input type="checkbox" name="Category[]" value="5">Action
			<input type="checkbox" name="Category[]" value="6">Adventure
			<input type="checkbox" name="Category[]" value="7">Comedy
			<input type="checkbox" name="Category[]" value="8">Drama
			<input type="checkbox" name="Category[]" value="9">Ecchi
			<input type="checkbox" name="Category[]" value="10">Fantasy
			<input type="checkbox" name="Category[]" value="11">Harem
			<input type="checkbox" name="Category[]" value="12">Isekai
			<input type="checkbox" name="Category[]" value="13">Magic
			<input type="checkbox" name="Category[]" value="14">Mecha
			<input type="checkbox" name="Category[]" value="15">Romance
			<input type="checkbox" name="Category[]" value="16">School Life
			<input type="checkbox" name="Category[]" value="17">Shoujo
			<input type="checkbox" name="Category[]" value="18">Shounen
			<input type="checkbox" name="Category[]" value="19">Slice of life
			<br>
			Số tập: <input type="text" name="Eps_Number" value="" placeholder="<?= $row['Eps_Number'] ?>">
			<br>
			Bìa: <input type="file" name="Cover" value="" >
			<image height="100px" src="<?= $row['Cover_address'] ?>"> 
			<br>
			Nội dung
			<br>
			<textarea name="Content" placeholder="<?= $row['Content'] ?>"></textarea>
			<br>
			<input type="submit" value="Sửa">
			<a href="Admin_Listing.php" >Quay lại</a>
		</form>
	</div>
  </body>
	
</html>