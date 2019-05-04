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
               <a href="Manager_User.php">Quản lý người dùng</a>
            </td>
            <td align="right">
                <a href="logout.php">Log out</a>
            </td>
        </tr>
    </table>
	<?php
		require_once('connFilm.php');
		$sql = "SELECT * From Comment ORDER BY (Id_Comment) DESC";
		$result = $connFilm->query($sql);
		
		// $connFilm->close();
	?>
	<div align="center">
		<h2>Danh sách comment</h2>
        <p>Hiện có: <?= $result->num_rows?> bình luận</p>
		<br>
		<table>
			<tr>
				<th>
					User
				</th>
				<th>
					Film
				</th>
				<th>
					Comment
				</th>
                <th>
                    Tùy chọn
                </th>
			</tr>
			<?php
				if ($result->num_rows > 0)	{
					while ($row = $result->fetch_assoc())	{
                        $cover = $connFilm->query("SELECT * from Film where Id_Film = " . $row['Id_Film']);
                        $cover = $cover->fetch_assoc();
                        $cover = $cover['Cover_address'];
                        $user = $connFilm->query("SELECT * from Account where Id_Account = " . $row['Id_User']);
                        $user = $user->fetch_assoc();
                        $user = $user['Name_Account'];
			?>
			<tr>
                <td>
                    <p><?= $user?></p>
                </td>
				<td>
					<image src="<?= $cover ?>" height="100px">
				</td>
				<td align="center">
                    <p><?= $row['Content'] ?></p>
				</td>
				<td>
					<a href="delete_cmt.php?Id_Comment=<?= $row['Id_Comment'] ?>">Xóa</a>
				</td>
			</tr>
			<?php } } ?>
		</table
	</div>
  </body>
	
</html>