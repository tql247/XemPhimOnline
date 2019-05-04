<?php
	session_start();
	if (!isset($_SESSION['Admin']))
		header("Location: login.php");

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="icon" href="images/logobar.png">
    <title>Admin upload</title>
	
	<style>
		table, td, th {
			border: 1px solid black;
			border-collapse: collapse;
		}

		#header td {
				border: 1px solid white;
				border-collapse: collapse;
		}
	</style>
  </head>
  <body>
		
	<table id="header" width="100%">
        <tr>
            <td>
               <a href="Manager_Cmt.php">Quản lý bình luận</a> ||
               <a href="Manager_User.php">Quản lý người dùng</a>
            </td>
            <td align="right">
                <a href="logout.php">Log out</a>
            </td>
        </tr>
    </table>

	<?php
		require_once('connFilm.php');
		$sql = "SELECT Id_Film, Name_Film, Eps_Number, Cover_address From Film order by (Id_Film) DESC";
		$result = $connFilm->query($sql);
		
		// $connFilm->close();
	?>
	<div algin="center" align="center">
		<h2>Danh sách phim</h2>
		<br>
		Tổng phim hiện tại: <?= $result->num_rows ?> <a href="admin_upload.php">Thêm phim</a>
		<p></p>
		<table>
			<tr>
				<th>
					ID
				</th>
				<th>
					Ảnh bìa
				</th>
				<th>
					Tên phim
				</th>
				<th>
					Trailer
				</th>
				<th>
					Tổng số tập
				</th>
				<th>
					Tập hiện có
				</th>
				<th>
					Thao tác
				</th>
			</tr>
			<?php
				if ($result->num_rows > 0)	{
					while ($row = $result->fetch_assoc())	{
			?>
			<tr>
				<td>
					<p><?= $row['Id_Film'] ?></p>
				</td>
				<td>
					<image src="<?= $row['Cover_address'] ?>" height="100px">
				</td>
				<td>
					<a href="infor.php?Id_Film=<?= $row['Id_Film'] ?>"><?= $row['Name_Film'] ?></a>
				</td>
				<td align="center">
					<form action="upload_trailer.php?Id_Film=<?= $row['Id_Film'] ?>" method="POST" enctype="multipart/form-data">
						<span style="margin-bottom: 5px;">
						<?php
							$sql = "SELECT * FROM Trailer where Id_Film = " . $row['Id_Film'];
							$check = $connFilm->query($sql);
							if ($check->num_rows > 0)
								echo "Sửa";
							else
								echo "Thêm";
						?>
						trailer</span>
						<input style="margin-bottom: 5px;" type="file" name="Trailer">
						<input type="submit">
					</form>
				</td>
				<td align="center">
					<p><?= $row['Eps_Number'] ?></p>
				</td>
				<td valign="bottom" style="margin-bottom: 5px;">
					<?php
						$sql = "SELECT * From Film_Eps Where Id_Film = " . $row['Id_Film'];
						$Eps_List = $connFilm->query($sql);
						if ($Eps_List->num_rows > 0)	{
							while ($Eps = $Eps_List->fetch_assoc())	{
					?>
							<span> <?= $Eps['Eps'] ?> - </span>
					<?php } } ?>
					<a href="delete_all_eps.php?Id_Film=<?= $row['Id_Film'] ?>">Xoá tất cả các tập</a>
					<form action="upload_eps.php?Id_Film=<?= $row['Id_Film'] ?>" method="POST" enctype="multipart/form-data">
						<hr>
						<span style="margin-bottom: 5px;">Thêm tập</span>
						<input style="margin-bottom: 5px;" type="file" name="Eps">
						<input type="submit">
					</form>
				</td>
				<td>
					<a href="update_film.php?Id_Film=<?= $row['Id_Film'] ?>">Sửa</a>|
					|<a href="delete_film.php?Id_Film=<?= $row['Id_Film'] ?>">Xóa</a>
				</td>
			</tr>
			<?php } } ?>
		</table
	</div>
  </body>
	
</html>