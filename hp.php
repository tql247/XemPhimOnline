<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- My CSS -->
	<link rel="stylesheet" type="text/css" href="css/myCSS.css">
    
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   
	
	<link rel="icon" href="images/logobar.png">
    <title>Animation C | Xem anime | Xem phim hoạt hình | Chất lượng cao</title>
	
	<style>
		body {
			background-color: black;
		}
		
	</style>
  </head>
  <body>
	
	<?php
		
		include 'header.php';
		
		require_once('connFilm.php');
		
		$id = $connFilm->query("SELECT * FROM film ORDER BY RAND() LIMIT 1");
		$id = $id->fetch_assoc();
		$id = $id['Id_Film'];
	?>
	
	<main class="container">
		<div class="tray-title" style="background-color: #1C1C1C; border-right: 4px solid #2B2B2B; border-top: 4px solid #2B2B2B; border-bottom: 4px solid #2B2B2B;">
			<a style="color:#44b2e5;" href="infor.php?Id_Film=<?=$id?>"><h5>Xem gì hôm nay >></h5></a>
		</div>
		<div style="border-left: 4px solid #2B2B2B; border-right: 4px solid #2B2B2B;" class="wrap-carousel">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<a href="#"><img class="d-block w-100" src="images/random1.jpg" alt="First slide"></a>
					</div>
					<div class="carousel-item">
						<a href="#"><img class="d-block w-100" src="images/random2.jpg" alt="Second slide"></a>
					</div>
					<div class="carousel-item">
						<a href="#"><img class="d-block w-100" src="images/random3.jpg" alt="Third slide"></a>
					</div>
					</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</main>
	
	<main class="container">
		<div class="tray-title" style="background-color: #1C1C1C; border-right: 4px solid #2B2B2B; border-top: 4px solid #2B2B2B; border-bottom: 4px solid #2B2B2B;">
			<a style="color:#44b2e5;" href="#"><h5>Phim mới >></h5></a>
		</div>
		<div align="center" class="wrap-cover-list row mr-auto ml-auto" style="background-color: #1C1C1C; border-left: 4px solid #2B2B2B; border-right: 4px solid #2B2B2B; border-bottom: 4px double #2B2B2B; padding-top: 5px;">
			<?php
				$sql = "SELECT * From film where `Id_Film` in (SELECT Id_Film From film_eps) ORDER BY Id_Film DESC";
				$result = $connFilm->query($sql);
								
				
					for ($i = 0; $i < 24; $i++) {
						if ($result->num_rows > 0 && $row = $result->fetch_assoc())	{
							$sql = "SELECT count(Eps) as Number_Eps From Film_Eps Where Id_Film = " . $row['Id_Film'];
							$Eps_Number = $connFilm->query($sql);
							$Eps = $Eps_Number->fetch_assoc();
							$Eps = $Eps['Number_Eps'];
			?>
				<div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 mb-4">
					<div class="ls-cover">
						<a href="infor.php?Id_Film=<?= $row['Id_Film']?>">
							<img src="<?= $row['Cover_address']?>">
						</a>
						<div class="eps-cover">
							<p><?= $Eps ?>/<?= $row['Eps_Number']?></p>
						</div>
						<div class="f-title">
							<p><?= $row['Name_Film']?></p>
						</div>
					</div>
				</div>
			<?php }else { ?> 
				<div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 mb-4">
					<div class="ls-cover">
					</div>
				</div>
			<?php }} ?>
		</div>
	</main>
	
	
	<main style="display:none;" class="container mt-2">
		<div class="row ml-auto mr-auto">
			<div style="color: #adadad;" class="wrap-cover-list col-lg-7">
				<button type="button" onclick="topsessonC()" id="topsesson" class="space-right space-top btn btn-outline-secondary">Top bình chọn mùa</button>
				<button type="button" onclick="topyearC()" id="topyear" class="space-right space-top btn btn-outline-secondary">Top bình chọn năm</button>
				<button type="button" onclick="topviewC()" id="topview" class="space-top btn btn-outline-secondary">Xem nhiều nhất</button>
				<div class="content" style="margin-top:20px;">
					<div style="display: none;" id="content-topsesson">
						<div class="row space-bottom">
							<div class="col-sm-3" >
								<a href=""><img src="images/anime1.jpg"></a>
							</div>
							<div class="col-sm-8 ml-auto" >
								<a href="infor.php" class="none-decorate"><h4>Name</h4></a>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar pretium enim quis maximus. Nunc sit amet auctor mauris. Aenean elementum ornare ligula at vehicula. Maecenas a nunc dolor. Fusce sit amet congue libero. Sed pretium eleifend sapien, ac lacinia velit euismod vitae. Nunc hendrerit ornare vehicula. Sed quis augue finibus, tincidunt ligula in, condimentum ligula. In urna eros, semper ut semper at, vulputate sed libero. Pellentesque ultrices faucibus justo, nec pellentesque ipsum mattis sollicitudin. Donec urna odio, lacinia eget aliquam sed, consectetur a mauris. Curabitur dapibus enim quis vestibulum interdum. Nunc pharetra, elit nec rhoncus laoreet, nunc ante imperdiet orci, et hendrerit magna tellus nec est. In finibus ante sit amet ligula dapibus cursus.</p>
								<p><em>Lượt bình chọn: </em></p>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Romance</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">NTR</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Gang bang</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Mind break</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Deep throat</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Animal</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Tag name</button>
							</div>
						</div>
						<div class="underline"></div>
						<div class="row space-bottom">
							<div class="col-sm-3" >
								<a href=""><img src="images/anime1.jpg"></a>
							</div>
							<div class="col-sm-8 ml-auto" >
								<a href="#" class="none-decorate"><h4>Name</h4></a>
								<p>ml-autociptione</p>
								<p><em>Lượt bình chọn: </em></p>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Romance</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">NTR</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Gang bang</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Mind break</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Deep throat</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Animal</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Tag name</button>
							</div>
						</div>
						<div class="underline"></div>
						<div class="row space-bottom">
							<div class="col-sm-3" >
								<a href=""><img src="images/anime1.jpg"></a>
							</div>
							<div class="col-sm-8 ml-auto" >
								<a href="#" class="none-decorate"><h4>Name</h4></a>
								<p>ml-autociptione</p>
								<p><em>Lượt bình chọn: </em></p>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Romance</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">NTR</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Gang bang</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Mind break</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Deep throat</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Animal</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Tag name</button>
							</div>
						</div>
						<div class="underline"></div>
						<div class="row space-bottom">
							<div class="col-sm-3" >
								<a href=""><img src="images/anime1.jpg"></a>
							</div>
							<div class="col-sm-8 ml-auto" >
								<a href="#" class="none-decorate"><h4>Name</h4></a>
								<p>ml-autociptione</p>
								<p><em>Lượt bình chọn: </em></p>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Romance</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">NTR</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Gang bang</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Mind break</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Deep throat</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Animal</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Tag name</button>
							</div>
						</div>
						<div class="underline"></div>
						<div class="row space-bottom">
							<div class="col-sm-3" >
								<a href=""><img src="images/anime1.jpg"></a>
							</div>
							<div class="col-sm-8 ml-auto" >
								<a href="#" class="none-decorate"><h4>Name</h4></a>
								<p>ml-autociptione</p>
								<p><em>Lượt bình chọn: </em></p>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Romance</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">NTR</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Gang bang</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Mind break</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Deep throat</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Animal</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Tag name</button>
							</div>
						</div>
						<div style="position:relative; height:50px">
							<button type="button" class="btn-sm btn btn-outline-light" style="position:absolute; right:50px; clear:both;">Xem thêm</button>
						</div>
					</div>
					<div style="display: none;" id="content-topyear">
						<div class="row space-bottom">
							<div class="col-sm-3" >
								<img class="oci fitcover space-right" src="images/anime2.jpg">
							</div>
							<div class="col-sm-8 ml-auto" >
								<a href="#" class="none-decorate"><h4>Name</h4></a>
								<p>ml-autociptione</p>
								<p><em>Lượt bình chọn: </em></p>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Romance</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">NTR</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Gang bang</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Mind break</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Deep throat</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Animal</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Tag name</button>
							</div>
						</div>
						<div class="underline"></div>
						<div class="row space-bottom">
							<div class="col-sm-3" >
								<img class="oci fitcover space-right" src="images/anime2.jpg">
							</div>
							<div class="col-sm-8 ml-auto" >
								<a href="#" class="none-decorate"><h4>Name</h4></a>
								<p>ml-autociptione</p>
								<p><em>Lượt bình chọn: </em></p>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Romance</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">NTR</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Gang bang</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Mind break</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Deep throat</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Animal</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Tag name</button>
							</div>
						</div>
						<div class="underline"></div>
						<div class="row space-bottom">
							<div class="col-sm-3" >
								<img class="oci fitcover space-right" src="images/anime2.jpg">
							</div>
							<div class="col-sm-8 ml-auto" >
								<a href="#" class="none-decorate"><h4>Name</h4></a>
								<p>ml-autociptione</p>
								<p><em>Lượt bình chọn: </em></p>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Romance</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">NTR</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Gang bang</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Mind break</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Deep throat</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Animal</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Tag name</button>
							</div>
						</div>
						<div class="underline"></div>
						<div class="row space-bottom">
							<div class="col-sm-3" >
								<img class="oci fitcover space-right" src="images/anime2.jpg">
							</div>
							<div class="col-sm-8 ml-auto" >
								<a href="#" class="none-decorate"><h4>Name</h4></a>
								<p>ml-autociptione</p>
								<p><em>Lượt bình chọn: </em></p>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Romance</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">NTR</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Gang bang</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Mind break</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Deep throat</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Animal</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Tag name</button>
							</div>
						</div>
						<div class="underline"></div>
						<div class="row space-bottom">
							<div class="col-sm-3" >
								<img class="oci fitcover space-right" src="images/anime2.jpg">
							</div>
							<div class="col-sm-8 ml-auto" >
								<a href="#" class="none-decorate"><h4>Name</h4></a>
								<p>ml-autociptione</p>
								<p><em>Lượt bình chọn: </em></p>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Romance</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">NTR</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Gang bang</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Mind break</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Deep throat</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Animal</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Tag name</button>
							</div>
						</div>
						<div style="position:relative; height:50px">
							<button type="button" class="btn-sm btn btn-outline-light" style="position:absolute; right:50px; clear:both;">Xem thêm</button>
						</div>
					</div>
					<div style="display: none;" id="content-topview">
						<div class="row space-bottom">
							<div class="col-sm-3" >
								<img class="oci fitcover space-right" src="images/anime3.jpg">
							</div>
							<div class="col-sm-8 ml-auto" >
								<a href="#" class="none-decorate"><h4>Name</h4></a>
								<p>ml-autociptione</p>
								<p><em>Lượt xem: </em></p>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Romance</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">NTR</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Gang bang</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Mind break</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Deep throat</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Animal</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Tag name</button>
							</div>
						</div>
						<div class="underline"></div>
						<div class="row space-bottom">
							<div class="col-sm-3" >
								<img class="oci fitcover space-right" src="images/anime3.jpg">
							</div>
							<div class="col-sm-8 ml-auto" >
								<a href="#" class="none-decorate"><h4>Name</h4></a>
								<p>ml-autociptione</p>
								<p><em>Lượt xem: </em></p>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Romance</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">NTR</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Gang bang</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Mind break</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Deep throat</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Animal</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Tag name</button>
							</div>
						</div>
						<div class="underline"></div>
						<div class="row space-bottom">
							<div class="col-sm-3" >
								<img class="oci fitcover space-right" src="images/anime3.jpg">
							</div>
							<div class="col-sm-8 ml-auto" >
								<a href="#" class="none-decorate"><h4>Name</h4></a>
								<p>ml-autociptione</p>
								<p><em>Lượt xem: </em></p>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Romance</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">NTR</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Gang bang</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Mind break</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Deep throat</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Animal</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Tag name</button>
							</div>
						</div>
						<div class="underline"></div>
						<div class="row space-bottom">
							<div class="col-sm-3" >
								<img class="oci fitcover space-right" src="images/anime3.jpg">
							</div>
							<div class="col-sm-8 ml-auto" >
								<a href="#" class="none-decorate"><h4>Name</h4></a>
								<p>ml-autociptione</p>
								<p><em>Lượt xem: </em></p>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Romance</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">NTR</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Gang bang</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Mind break</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Deep throat</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Animal</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Tag name</button>
							</div>
						</div>
						<div class="underline"></div>
						<div class="row space-bottom">
							<div class="col-sm-3" >
								<img class="oci fitcover space-right" src="images/anime3.jpg">
							</div>
							<div class="col-sm-8 ml-auto" >
								<a href="#" class="none-decorate"><h4>Name</h4></a>
								<p>ml-autociptione</p>
								<p><em>Lượt xem: </em></p>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Romance</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">NTR</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Gang bang</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Mind break</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Deep throat</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Animal</button>
								<button type="button" class="btn btn-primary btn-sm tag" style="margin-top:5px;">Tag name</button>
							</div>
						</div>
						<div style="position:relative; height:50px">
							<button type="button" class="btn-sm btn btn-outline-light" style="position:absolute; right:50px; clear:both;">Xem thêm</button>
						</div>
					</div>
				</div>
			</div>
			<div class="nicol-soonR col-lg-5" style="margin-top:10px;">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
							<span style="color: BlueViolet;"><strong>Sắp ra</strong></span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
							<span style="color: green;"><strong>Đang chiếu</strong></span>
						</a>
					</li>
				</ul>
				<div style="border: 1px solid white;" class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<ul style="margin-left:-30px; margin-top: 10px;">
							<?php
								$sql = "SELECT * From Film Where `Id_Film` not in (SELECT Id_Film From film_eps)";
								$result = $connFilm->query($sql);
								
								if ($result->num_rows > 0)	{
									while ($row = $result->fetch_assoc()) {
							?>
								<a style="" href="infor.php?Id_Film=<?= $row['Id_Film'] ?>"><li>
									<h5 id="soon-release" style="color: #a0962e;"><?= $row['Name_Film'] ?></h5>
									<p style="margin-top: -8px; color:#969696;"><?= $row['YearRelease'] ?></p>
								</li></a>
							<?php }} ?>
						</ul>
					</div>
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<ul style="margin-left:-30px;  margin-top: 10px;">
							<?php
								$sql = "SELECT Film.* From Film, film_eps Where film.Id_Film = film_eps.Id_Film and Eps_Number > (SELECT COUNT(Eps) FROM film_eps WHERE film_eps.Id_Film = film.Id_Film) GROUP by (Id_Film)";
								$result = $connFilm->query($sql);
								
								if ($result->num_rows > 0)	{
									while ($row = $result->fetch_assoc()) {
							?>
								<a style="" href="infor.php?Id_Film=<?= $row['Id_Film'] ?>"><li>
									<h5 id="laster" style="color: SteelBlue;"><?= $row['Name_Film'] ?></h5>
									<p style="margin-top: -8px; color:#969696;"><?= $row['YearRelease'] ?></p>
								</li></a>
							<?php }} ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</main>
	
	
	
	<div class="footer">
		Trang web này thuộc quyền sở hữu: Trần Quốc Lĩnh
	</div>
	
	<!-- My javascript below -->
	<script type="text/javascript" src="js/myJS.js"></script>
	<script type="text/javascript" src="js/homepage.js"></script>
	<!-- k -->
	<script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
  </body>
</html>
