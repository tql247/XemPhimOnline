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
		
		#rmv:hover{
			background-color: red;
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
			<h5 style="color: #d14002;">Đã lưu</h5>
		</div>
		<div align="center" class="wrap-cover-list row mr-auto ml-auto" style="background-color: #1C1C1C; border-left: 4px solid #2B2B2B; border-right: 4px solid #2B2B2B; border-bottom: 4px double #2B2B2B; padding-top: 5px;">
			<?php
				require_once('connFilm.php');
				$sql = "SELECT * From Save_Film Where Id_User = " . $_SESSION['Id_User'] . " ORDER BY Id_Save DESC";
				$result = $connFilm->query($sql);
				if ($result->num_rows > 0)	{
					while ($row = $result->fetch_assoc())	{
						$sql = "SELECT * From Film Where Id_Film = " . $row['Id_Film'];
						$Save_List = $connFilm->query($sql);
						$Film = $Save_List->fetch_assoc();
						
			?>
				<div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 mb-4">
					<div class="ls-cover">
						<a href="infor.php?Id_Film=<?=$Film['Id_Film']?>"><img src="<?= $Film['Cover_address']?>"></a>
						<a href="removeSave.php?Id_Save=<?=$row['Id_Save']?>">
							<div id="rmv" class="eps-cover">
								<p style="color:green">Gỡ</p>
							</div>
						</a>
						<div align="left" class="f-title">
							<p class="ml-1"><?= $Film['Name_Film']?></p>
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
		$("#signin").addClass("active");
	</script>
</html>