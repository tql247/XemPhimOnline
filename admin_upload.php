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
		<h2>Thêm Phim</h2>
		<form action="upload.php" method="POST" enctype="multipart/form-data">
			Tên phim: <input name="Name" type="text"> <br>
			Năm sản xuất: <input name="YearRelease" type="text"> <br>
			Hãng sản xuất: <input name="Manufacturer" type="text"> <br>
			Tác giả: <input name="Author" type="text"> <br>
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
			Số tập: <input type="text" name="Eps_Number" value="">
			<br>
			Bìa: <input type="file" name="Cover" value="">
			<br>
			Nội dung
			<br>
			<textarea name="Content"></textarea>
			<br>
			<input type="submit" value="Đăng"> <a href="Admin_Listing.php">Trở lại trang listing</a>
		</form>
	</div>
  </body>
	
</html>