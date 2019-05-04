<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="css/myCSS.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	
	<link rel="icon" href="images/logobar.png">
    <title>Animation C | Xem anime | Xem phim hoạt hình | Chất lượng cao</title>
	
	<style>
		body {
			background-color: black;
		}
		<!-- -->
		<!-- -->
	</style>
  </head>
  <body>	
	<?php
		include 'header.php';
	?>
	
	<main class="container">
		<div class="tray-title" style="color: white; background-color: #1C1C1C; border-right: 4px solid #2B2B2B; border-top: 4px solid #2B2B2B; border-bottom: 4px solid #2B2B2B;">
			<h5 style="color: #d14002;">Danh sách</h5>
		</div>
		<div style="overflow-x: auto; white-space: nowrap; background-color: #1C1C1C; border-left: 4px solid #2B2B2B; border-right: 4px solid #2B2B2B; border-bottom: 4px solid #2B2B2B;">
			<?php 
				require_once('connFilm.php');
				$sql = "SELECT * From Category";
				$result = $connFilm->query($sql);
				if ($result->num_rows > 0)	{
					while($row = $result->fetch_assoc())	{
			?>
				<a href="category_list.php?Id_Category=<?= $row['Id_Category'] ?>"><button type="button" class="mb-1 btn btn-secondary tag"><?= $row['Name_Category'] ?></button></a>
			<?php }}?>
		</div>
		<div align="center" class="wrap-cover-list row mr-auto ml-auto" style="background-color: #1C1C1C; border-left: 4px solid #2B2B2B; border-right: 4px solid #2B2B2B; border-bottom: 4px double #2B2B2B; padding-top: 5px;">
			<?php
				$sql = "SELECT Id_Film, Name_Film, Eps_Number, Cover_address From Film";
				$result = $connFilm->query($sql);
				
				// $connFilm->close();
				if ($result->num_rows > 0)	{
					while ($row = $result->fetch_assoc())	{
						$sql = "SELECT count(Eps) as Number_Eps From Film_Eps Where Id_Film = " . $row['Id_Film'];
						$Eps_Number = $connFilm->query($sql);
						$Eps = $Eps_Number->fetch_assoc();
						$Eps = $Eps['Number_Eps'];
						
			?>
			<div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 mb-4">
				<div class="ls-cover">
					<a href="infor.php?Id_Film=<?= $row['Id_Film']?>"><img src="<?= $row['Cover_address']?>"></a>
					<div class="eps-cover">
						<p><?= $Eps ?>/<?= $row['Eps_Number']?></p>
					</div>
					<div align="left" class="f-title">
						<p class="ml-1"><?= $row['Name_Film']?></p>
					</div>
				</div>
			</div>
			<?php }}?>
		</div>
		<!--<div align="center" style="background-color: #282828; border-right: 4px solid #2B2B2B; border-left: 4px solid #2B2B2B; border-bottom: 4px solid #2B2B2B;">
			<a href=""><div class="ls-number"><strong>1</strong></div></a>
			<a href=""><div class="ls-number"><strong>2</strong></div></a>
			<a href=""><div class="ls-number"><strong>3</strong></div></a>
			<a href=""><div class="ls-number"><strong>4</strong></div></a>
			<a href=""><div class="ls-number"><strong>5</strong></div></a>
		</div>-->
	</main>
	
	
	
	<div class="footer">
		Trang web này thuộc quyền sở hữu: Trần Quốc Lĩnh
	</div>	
  </body>
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- My js -->
	<!-- From bootstrap -->
	<script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<!-- My javascript below -->
	<script type="text/javascript" src="js/myJS.js"></script>
	<script>
		$("#list").addClass("active");
	</script>
</html>