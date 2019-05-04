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
    <title>Admin manager comment</title>
	
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
  <body >
    <table id="header" width="100%">
        <tr>
            <td>
               <a href="Admin_listing.php">Quản lý thông tin phim</a> ||
               <a href="Manager_Cmt.php">Quản lý bình luận</a>
            </td>
            <td align="right">
                <a href="logout.php">Log out</a>
            </td>
        </tr>
    </table>
	<?php
		require_once('connFilm.php');
		$sql = "SELECT * From Account ORDER BY (Id_Account) DESC";
		$result = $connFilm->query($sql);
		
		// $connFilm->close();
	?>
	<div align="center">
		<h2>Danh sách comment</h2>
        <p>Hiện có: <?= $result->num_rows?> người dùng</p>
		<table>
			<tr>
				<th>
					User
				</th>
				<th>
					Password
				</th>
				<th>
					Role
				</th>
                <th>
                    Tùy chọn
                </th>
			</tr>
			<?php
				if ($result->num_rows > 0)	{
					while ($row = $result->fetch_assoc())	{
			?>
			<tr>
                <td>
                    <?= $row['Name_Account'] ?>
                </td>
				<td>
                    <p><?= $row['Password'] ?></p>
				</td>
				<td align="center">
                    <p><?= $row['Role'] ?></p>
				</td>
				<td>
					<a href="delete_user.php?Id_Account=<?= $row['Id_Account'] ?>">Xóa</a>
				</td>
			</tr>
			<?php } } ?>
		</table
	</div>
  </body>
	
</html>