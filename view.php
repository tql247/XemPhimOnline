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
		require_once('connFilm.php');
		$sql = "SELECT * From Film_Eps Where Id_Film = " . $_REQUEST['Id_Film'];
		$result = $connFilm->query($sql);
		
		
		
		$sql = "SELECT * From Film Where Id_Film = " . $_REQUEST['Id_Film'];
		$Name_Film = $connFilm->query($sql);
		$Name_Film = $Name_Film->fetch_assoc();
		$Name_Film = $Name_Film['Name_Film'];
		
		$List_Eps = array();
		$i = 0;
		
		if ($result->num_rows > 0)	{
			for ($i = 0; $row = $result->fetch_assoc(); $i++)	{
				$List_Eps[$i] = $row;
			}
		}
		
		if ($i == 0)	{
			echo "<h1 align='center' style='color: red;'>Phim này hiện chưa có tập nào</h1>";
			exit();
		}
		else if($_REQUEST['Eps'] == "0" && $i != 0)
			$_REQUEST['Eps'] = "1";
		
		$sql = "SELECT * From Film_Eps Where Eps = " . $_REQUEST['Eps'] . " and Id_Film = " . $_REQUEST['Id_Film'];
		$current_eps = $connFilm->query($sql);
		$current_eps = $current_eps->fetch_assoc();
		
		
		$connFilm->close();
	?>
	
	
	<div class="container">
		<div style="background-color: black; border: 5px solid #2B2B2B;">
			<div id="video-cover" align="center" style="padding-top: 7px; padding-left: 11%; padding-right: 11%; border-bottom: 5px solid #2B2B2B;">
				<video width="100%"  controls>
					<source src="<?= $current_eps['Direct'] ?>" type="video/mp4">
				</video>
			</div>
			<div>
				<a href="infor.php?Id_Film=<?= $_REQUEST['Id_Film'] ?>"><h5 style="color: #BC8000; padding-top: 5px;"><span>&nbsp;&nbsp;<?= $Name_Film ?> tập </span><span id="Eps_Number"><?= $_REQUEST['Eps'] ?></span></h5></a>
			</div>
			<div class="list-eps">
				<?php 
					foreach($List_Eps as $Eps)	{
				?>
					<a href="view.php?Id_Film=<?= $_REQUEST['Id_Film'] ?>&Eps=<?= $Eps['Eps'] ?>"><div align="center" class="eps-idx"><h6><?= $Eps['Eps'] ?></h6></div></a>
				<?php 
					}
				?>
			</div>
		</div>
	</div>
	
	
	
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
		// $("#Eps_Number").text("69");
		// alert($("#Eps_Number").text());
	</script>
</html>