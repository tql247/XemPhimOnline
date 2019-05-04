<?php
	session_start();
	if (isset($_SESSION['User']))
		echo"<div class='container'>
			<nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
				<a class='logocollaspe navbar-brand' href='hp.php'>
					<img src='images/logo.png' width='30' height='30' class='d-inline-block align-top' alt=''>
					Animation C
				</a>
				<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
				<span class='navbar-toggler-icon'></span>
				</button>

				<div class='collapse navbar-collapse' id='navbarSupportedContent'>
					<ul class='navbar-nav mr-auto'>
						<li class='nav-item'>
							<a id='login' class='nav-link' href='logout.php'>Đăng xuất</a>
						</li>
						<li class='nav-item'>
							<a id='signin' class='nav-link' href='savepage.php'>Đã lưu</a>
						</li>
						<li class='nav-item'>
							<a id='list' class='nav-link' href='result.php'>Danh sách</a>
						</li>
					</ul>
					<form class='form-inline' action='search.php'>
						<input name='search' id='search' class='form-control mr-2' type='search' placeholder='Nhập từ khóa' aria-label='Search'>
						<button class='btn btn-outline-light mr-auto my-2 my-sm-0' type='submit'>Tìm kiếm</button>
					</form>
				</div>
			</nav>
		</div>";
	else
		echo"<div class='container'>
				<nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
					<a class='logocollaspe navbar-brand' href='hp.php'>
						<img src='images/logo.png' width='30' height='30' class='d-inline-block align-top' alt=''>
						Animation C
					</a>
					<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
					<span class='navbar-toggler-icon'></span>
					</button>

					<div class='collapse navbar-collapse' id='navbarSupportedContent'>
						<ul class='navbar-nav mr-auto'>
							<li class='nav-item'>
								<a id='login' class='nav-link' href='login.php'>Đăng nhập</a>
							</li>
							<li class='nav-item'>
								<a id='signin' class='nav-link' href='signin.php'>Đăng ký</a>
							</li>
							<li class='nav-item'>
								<a id='list' class='nav-link' href='result.php'>Danh sách</a>
							</li>
						</ul>
						<form class='form-inline' action='search.php'>
							<input name='search' id='search' class='form-control mr-2' type='search' placeholder='Nhập từ khóa' aria-label='Search'>
							<button class='btn btn-outline-light mr-auto my-2 my-sm-0' type='submit'>Tìm kiếm</button>
						</form>
					</div>
				</nav>
			</div>";
?>