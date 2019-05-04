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
		
	</style>
  </head>
  <body>
  
	
	<?php
		include 'header.php';
	?>
	
	
	
	<main class="container">
		<div class="login">
			<form action="checkLogin.php" method="GET">
				<h3>Đăng nhập</h3>
				<div style="padding-left: 15px; padding-right: 15px;">
					<div class="form-group">
						<label for="user">Tên tài khoản</label>
						<input type="text" class="form-control" id="user" name="Name_Account" placeholder="Nhập tên tài khoản">
					</div>
					<div class="form-group">
						<label for="pwd">Mật khẩu</label>
						<input type="password" class="form-control" id="pwd" name="Password" placeholder="Nhập mật khẩu">
					</div>
					<div align="center">
						<button type="submit" class="btn btn-success">Đăng nhập</button>
					</div>
				</div>
			</form>
		</div>
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
		$("#login").addClass("active");
	</script>
</html>