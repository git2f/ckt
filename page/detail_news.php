<?php
include("../BackEnd/config/config3.inc.php");
$sql = "select * from news where pk_news = ".$_GET[idactivity]." ";
$query = mysqli_query($con,$sql);
$num = mysqli_num_rows($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>WeDpu</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.5-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.5-dist/css/bootstrap-theme.min.css">
	<script type="text/javascript" src="../jquery/jquery-1.11.3.min.js"></script>
</head>
<body>
	<div class="container">

		<!-- Static navbar -->
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="../index.php">WeDpu</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="../index.php">หน้าแรก</a></li>
						<li><a href="gallery.php">Gallery</a></li>
						<li><a href="e-learning.php">ห้องสมุด</a></li>
						<li><a href="contact.php">ติดต่อเรา</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="login/login.php" target="_blank">สำหรับนักศึกษา</a></li>
							<li><a href="login/login.php" target="_blank">สำหรับ Admin</a></li>
						</ul>
					</li>
						
					</ul>
				</div><!--/.nav-collapse -->
			</div><!--/.container-fluid -->
		</nav>

		

		<!-- image card -->

<div class="container">
	<div class="row">
	<h4>ติดตามข่าวสารหลักสูตรวิศวกรรมเว็บไซต์ได้ที่นี่ และ Fanpage Facebook<a href="hhttps://www.facebook.com/webengineering">@WebEngineering</a></h4>
	</div>
<hr>
			
<?php
for($i=1; $i<=$num; $i++){
	$result = mysqli_fetch_assoc($query);
?>

	<div class='row row-margin-bottom'>
	<div class='col-md-12 no-padding lib-item' data-category='view'>
	<div class='lib-panel'>
	<div class='row box-shadow'>
	<div class='col-md-4'>

	<?php
	$sql_img = "select * from gallery where pk_news = ".$result[pk_news]." ";
	$query_img = mysqli_query($con,$sql_img);
	$result_img = mysqli_fetch_assoc($query_img);
	?>

	<img class='lib-img-show' src='../img/news/<?=$result_img[path_gallery];?>'>
	</div>
	<div class='col-md-12'>
	<div class='lib-row lib-header'>
	<?=$result[head_news];?>
	<div class='lib-header-seperator'></div>			
	</div>
	<div class='lib-row lib-desc'>
	<?=$result[detail_news];?>
	</div>

	<?php
	$sql_file = "select * from file where pk_news = ".$result[pk_news]." ";
	$query_file = mysqli_query($con,$sql_file);
	$result_file = mysqli_fetch_assoc($query_file);
	$num_file = mysqli_num_rows($query_file);
	if(!empty($num_file)){?>

	<div class='col-md-12'>
		<br>&nbsp;ดาวน์โหลด : <a href="../file/news/<?=$result_file[path_file];?>" target="_blank">
		<i class="glyphicon glyphicon-download-alt"></i> <?=$result_file[path_file];?></a>
	</div>
	<?php
	}
	?>

	

	</div>
	</div>
	</div>
	</div>
<?php		
}
?>
</div>

		<!-- image card -->

		<hr>

		<!-- Footer -->
		<footer>
			<div class="row">
				<div class="col-lg-12">
					<p>Copyright &copy; WeDpu 2015</p>
				</div>
			</div>
			<!-- /.row -->
		</footer>

	</div> <!-- /container -->
	<script type="text/javascript" src="../bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
</body>
</html>