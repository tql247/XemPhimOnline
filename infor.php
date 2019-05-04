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
  <body onresize="myFunction()">
	
	<?php
		include 'header.php';
		
		require_once('connFilm.php');
		$sql = "SELECT * From Film Where Id_Film = " . $_REQUEST['Id_Film'];
		$result = $connFilm->query($sql);
		$row = $result->fetch_assoc();
		
		
		$sql = "SELECT * From Detail_Category Where Id_Film = " . $_REQUEST['Id_Film'];
		$Category_List = $connFilm->query($sql);
	?>
	
	
	
	<div class="container">
		<div id="anime_name">
			<h5 style="margin-top: 4px;"><strong><?= $row['Name_Film'] ?></strong></h5>
		</div>
		<div id="cover">
			<img class="d-inline-block" src="<?= $row['Cover_address']?>" style="width:100%;">
			<div style="width:100%; height:20%; position:absolute; list-style-type:none; bottom: 0px;">
				<a href="view.php?Id_Film=<?=$row['Id_Film']?>&Eps=0"><div id="select_view"><svg fill="white" width="16" height="16" viewBox="0 2 15 16"><path fill-rule="evenodd" d="M8.06 2C3 2 0 8 0 8s3 6 8.06 6C13 14 16 8 16 8s-3-6-7.94-6zM8 12c-2.2 0-4-1.78-4-4 0-2.2 1.8-4 4-4 2.22 0 4 1.8 4 4 0 2.22-1.78 4-4 4zm2-4c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z"/></svg> Xem</div></a>
				<a href="save.php?Id_Film=<?=$row['Id_Film']?>&Id_User=<?=$_SESSION['Id_User']?>"><div id="select_save"><svg fill="white" width="18" height="18" viewBox="4 2 22 25"><path d="M0 0h24v24H0z" fill="none"/><path d="M17 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V7l-4-4zm-5 16c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm3-10H5V5h10v4z"/></svg>Lưu&nbsp;</div></a>
			</div>
		</div>
		<div id="wall">
			<img onclick="show()" style="width:100%;" src="images/cover3.png">
			<div style="width:100%; height:20%; position:absolute; list-style-type:none; bottom: 0px;">
				<a href="view.php?Id_Film=<?=$row['Id_Film']?>&Eps=0"><div id="select_view2"><svg fill="white" width="16" height="16" viewBox="0 2 15 16"><path fill-rule="evenodd" d="M8.06 2C3 2 0 8 0 8s3 6 8.06 6C13 14 16 8 16 8s-3-6-7.94-6zM8 12c-2.2 0-4-1.78-4-4 0-2.2 1.8-4 4-4 2.22 0 4 1.8 4 4 0 2.22-1.78 4-4 4zm2-4c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z"/></svg> Xem</div></a>
				<a href="save.php?Id_Film=<?=$row['Id_Film']?>&Id_User=<?=$_SESSION['Id_User']?>"><div id="select_save2"><svg fill="white" width="18" height="18" viewBox="4 2 22 25"><path d="M0 0h24v24H0z" fill="none"/><path d="M17 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V7l-4-4zm-5 16c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm3-10H5V5h10v4z"/></svg>Lưu</div></a>
			</div>
		</div>
	</div>
	<div style="clear: both;"> </div>
	
	<div class="container">
		<div id="info">
			<div id="info_title">
				<h5>Thông tin</h5>
			</div>
				<ul style="margin-left: -37px; padding-top: 5px;">
					<li id="info_idx">
						Năm sản xuất: <span style="color: #4f6687;"><?= $row['YearRelease'] ?></span>
					</li>
					<li id="info_idx">
						Hãng sản xuất: <?= $row['Manufacturer'] ?>
					</li>
					<li id="info_idx">
						Tác giả: <?= $row['Author'] ?>
					</li>
					<li id="info_idx">
						Thể loại:
						<?php
							$List_Category = array();
							$Number = 0;
							if ($Category_List->num_rows > 0)	{
								while ($Id_Category = $Category_List->fetch_assoc())	{
									$sql = "SELECT * From Category Where Id_Category = " . $Id_Category['Id_Category'];
									$List_Category[$Number] = $Id_Category['Id_Category'];
									$Number = $Number + 1;
									$Category_List_Name = $connFilm->query($sql);
									$Category_Name = $Category_List_Name->fetch_assoc();
						?>
							<a href="category_list.php?Id_Category=<?= $Category_Name['Id_Category'] ?>"><div style="display: inline-block; margin-top: 2px; margin-bottom: 2px;" id="category_index"><?= $Category_Name['Name_Category'] ?></div></a>
						<?php } }
							$sql = "SELECT count(Eps) as Number_Eps From Film_Eps Where Id_Film = " . $row['Id_Film'];
							$Eps_Number = $connFilm->query($sql);
							$Eps = $Eps_Number->fetch_assoc();
							$Eps = $Eps['Number_Eps'];
						?>
					</li>
					<li id="info_idx">
						Số tập: <span style="color:#c48352;"><?= $Eps ?>/<?= $row['Eps_Number'] ?></span>
					&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
						Lượt xem: <?= $row['ViewNumber'] ?>
					</li>
					<li id="info_idx">
						<?php
							$sql = "SELECT avg(Value) as rate FROM rate where Id_Film = " . $_REQUEST['Id_Film'];
							$result = $connFilm->query("SELECT avg(Value) as rate FROM rate where Id_Film = " . $_REQUEST['Id_Film']);
							
							$rate = "result";
							if ($result->num_rows > 0)	{
								$rate = $result->fetch_assoc();
								$rate = substr($rate['rate'], 0, 3);
							}
						?>
						Bình chọn: <span id="rate"><?=$rate?></span>/5&nbsp;
						<?php
							if (isset($_SESSION['User'])) {
						?>
							<select class="rate">
								<option selected>Đánh giá</option>
								<option value="5">5*</option>
								<option value="4">4*</option>
								<option value="3">3*</option>
								<option value="2">2*</option>
								<option value="1">1*</option>
							</select>
						<?php } ?>
					</li>
				</ul>
		</div>
		<div id="description">
			<div id="description_title">
				<h5>Nội dung</h5>
			</div>
			<p style="padding-left: 5px; padding-top: 5px;">
				<?= $row['Content']?>
			</p>
			</div>
		</div>
	</div>
	
	<div style="clear: both;"> </div>
	<?php
		$sql = "SELECT * FROM Trailer where Id_Film = " . $_REQUEST['Id_Film'];
		$trailer = $connFilm->query($sql);
		if ($trailer->num_rows > 0) {
			$trailer = $trailer->fetch_assoc();
			$trailer = $trailer['Trailer'];
	?>
	
	<div class="container">
		<div style="background-color: #161616; border-left: 5px solid #2B2B2B; border-right: 5px solid #2B2B2B;">
			<div style="border-bottom: 1px solid #af7f05; text-align: left; color: #af7f05;">
				<h4 style="color: #af7f05;">&nbsp;Trailer</h4>
			</div>
			<div style="padding-top: 7px; padding-left: 15%; padding-right: 15%;">
				<video width="100%"  controls>
					<source src="<?= $trailer ?>" type="video/mp4">
				</video>
			</div>
		</div>
	</div>
	
	<?php } ?>
	
	<?php
		$List_Comment = array();
		$sql = "SELECT * From Comment Where Id_Film = '" . $_REQUEST['Id_Film'] . "' ORDER BY Id_Comment DESC";
		$result = $connFilm->query($sql);
		$i = 0;
		if ($result->num_rows > 0)	{
			for(; $row = $result->fetch_assoc(); $i++)	{
					$List_Comment[$i] = $row; 
			}
		}
	?>
	
	
	<div class="container" >
		<div id="cmt-area">
			<div id="cmt_count">
				<strong><em>&nbsp;<span id="number_comment"><?= $i ?></span> lượt bình luận</em></strong>
			</div>
			<div id="list-cmt">
				<div id="your">
				<?php if (isset($_SESSION['User'])) {
					$sql = "SELECT * From Account Where Id_Account like '" . $_SESSION['Id_User'] . "'";
					
					$Name = $connFilm->query($sql);
					$Name = $Name->fetch_assoc();
					$Name = $Name['Name_Account'];
				?>
					<form action="comment.php?" medthod="POST">
						<textarea name="Content" id="ycmt" placeholder="Nhập bình luận của bạn.. " class="form-control" rows="5" name="textarea"></textarea>
						<div id="submit_cmt">
							<input type="button" id="upComment" class="btn btn-info" value="Đăng">
						</div>
						<input style="display:none;" id="Id_Film" name="Id_Film" value="<?= $_REQUEST['Id_Film'] ?>">
						<input style="display:none;" id="Id_User" name="Id_User" value="<?= $_SESSION['Id_User'] ?>">
						<input style="display:none;" id="Name_User" name="Name_User" value="<?= $Name ?>">
					</form>
				<?php } ?>
				</div>
				<div id="guest-cmt">
					<ul id="listcomment" class="list-unstyled">
						<?php
							$j = 0;
							foreach($List_Comment as $row)	{
									$sql = "SELECT * From Account Where Id_Account like '" . $row['Id_User'] . "'";
									$List_Comment = $connFilm->query($sql);
									if ($List_Comment->num_rows > 0)	{
										while ($Comment = $List_Comment->fetch_assoc()) {
											$Name = $Comment['Name_Account'];
						?>
							<li style="display:none;" id="comment-<?= $j ?>" class="media">
								<img src="images/user.png" class="mr-0" alt="...">
								<div class="media-body">
									<h5 style="color:#7c81b2;" class="mt-0 mb-1"><?= $Name ?></h5>
									<p><?= $row['Content'] ?></p>
								</div>
							</li>
						<?php $j++; }} } ?>
					</ul>
				</div>
				<button id="show_more_cmt" type="button" class="btn btn-primary btn-lg btn-block">Tải thêm bình luận...</button>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div style="border: 4px solid #2B2B2B; background-color: #1C1C1C">
			<div style="margin-top: 15px;">
				<div>
					<div id="relate_title">
						<h5>Tương tự</h5>
					</div>
				</div>
				<div align="center">
					<div style="height: 270px; overflow-x: auto; max-width:100%; white-space: nowrap; margin-bottom: 7px;">
						<?php
							$sql = "update Similar set value = 0";
							$connFilm->query($sql);
							
							for ($i = 0; $i < $Number; $i++)	{
								$sql = "update Similar set value = value + 1 where Id_Film in (select Id_Film from detail_category where Id_Category = " . $List_Category[$i] . ") and Id_Film not like " . $_REQUEST['Id_Film'];
								$connFilm->query($sql);
							}
							
							$sql = "SELECT * from Similar order by value DESC limit 0,5";
							$result = $connFilm->query($sql);
							
							if ($result->num_rows > 0)	{
								while ($row = $result->fetch_assoc())	{
									$sql = "SELECT * from Film where Id_Film = " . $row['Id_Film'];
									$img = $connFilm->query($sql);
									$img = $img->fetch_assoc();
						?>
							<a href="infor.php?Id_Film=<?= $row['Id_Film'] ?>"><img class="relate_idx" src="<?= $img['Cover_address']?>"></a>
						<?php }} ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="abcde"> </div>
	
	<div class="footer">
		Trang web này thuộc quyền sở hữu: Trần Quốc Lĩnh
	</div>
	
	
  </body>
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- My js -->
	<!-- From bootstrap -->
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<!-- My javascript below -->
	<script type="text/javascript" src="js/myJS.js"></script>
	<script type="text/javascript" src="js/info.js"></script>
	<script>
		$("#upComment").click(function () {
			var Id_Film1 = $("#Id_Film").val();
			var Id_User = $("#Id_User").val();
			var Content = $("#ycmt").val();
			var Name = $("#Name_User").val();
			
			$.post("comment.php", {Id_Film:Id_Film1, Id_User:Id_User, Content:Content}, function(data, status){
				
			}, "json");
			
			var cmt = '<li class="media">';
					cmt +=	'<img src="images/user.png" class="mr-0" alt="...">';
					cmt +=		'<div class="media-body">';
					cmt +=			'<h5 style="color:#7c81b2;" class="mt-0 mb-1">'+ Name +'</h5>';
					cmt +=			'<p>' + Content + '</p>';
					cmt	+=		'</div>';
					cmt	+=	'</li>';
			$("#ycmt").val("");
			$("#listcomment").prepend(cmt);
			$("#number_comment").text(parseInt($("#number_comment").text(), 10) + 1);
		});
		var N = $("#number_comment").text();
		var cmt = "comment-";				

		i = 0;
		
		for(; i < 10; i++)	{
			cmt += i;
			$("#" + cmt).css("display", "block");
			cmt = "comment-";
		}
		
		$("#show_more_cmt").click(function () {
			for (j = i; j < i + 10; j++)	{
				cmt += j;
				$("#" + cmt).css("display", "block");
				cmt = "comment-";
			}
			i = j;
			if (i >= N)
				$("#show_more_cmt").text("Không có bình luận để tải thêm");
		});
		
		$(".rate").change(function () {
			var Id_Film = $("#Id_Film").val();
			var Id_User = $("#Id_User").val();
			var rate = $(this).val();
			
			$.post("rate.php", {Id_Film:Id_Film, Id_User:Id_User, rate:rate}, function(data, status){
				
			}, "json");
			
			location.href = location.href;
		});
	</script>
</html>