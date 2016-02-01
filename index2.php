<?php
include("BackEnd/config/config3.inc.php");
$sql_activity = "select * from activity";
$query_activity = mysqli_query($con,$sql_activity);
$num_activity = mysqli_num_rows($query_activity);
//activity
$sql_news = "select * from news";
$query_news = mysqli_query($con,$sql_news);
$num_news = mysqli_num_rows($query_news);
//news
?>
<!DOCTYPE html>
<html>
<head>
	<title>WeDpu</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.5-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.5-dist/css/bootstrap-theme.min.css">
	<script type="text/javascript" src="jquery/jquery-1.11.3.min.js"></script>
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
					<a class="navbar-brand" href="index.php">WeDpu</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php">หน้าแรก</a></li>
						<li><a href="page/gallery.php">Gallery</a></li>
						<li><a href="page/e-learning.php">ห้องสมุด</a></li>
						<li><a href="page/contact.php">ติดต่อเรา</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="page/login/login.php" target="_blank">สำหรับนักศึกษา</a></li>
							<li><a href="page/login/login.php" target="_blank">สำหรับ Admin</a></li>
						</ul>
					</li>
						
					</ul>
				</div><!--/.nav-collapse -->
			</div><!--/.container-fluid -->
		</nav>

		<!-- courousel -->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="img/cover/cover1.jpg" alt="Chania">
				</div>

				<div class="item">
					<img src="img/cover/cover2.jpg" alt="Chania">
				</div>

				<div class="item">
					<img src="img/cover/cover3.jpg" alt="Flower">
				</div>

				<div class="item">
					<img src="img/cover/cover4.jpg" alt="Flower">
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

		<!-- corousel -->


		<!-- Main component for a primary marketing message or call to action -->
		<div class="jumbotron">
			<h1>Web Engineering</h1>
			<p>เทคโนโลยีอินเทอร์เน็ตและเวิลด์ไวด์เว็บมีการพัฒนาเติบโตอย่างต่อเนื่องและไม่หยุดยั้ง แม้ว่าสถานการณ์เศรษฐกิจโลกจะอยู่ในภาวะวิกฤติ หลักสูตรวิทยาศาสตรมหาบัณฑิต สาขาวิชา Web Engineering จึงเป็นทางเลือกใหม่สำหรับผู้ที่ต้องการเป็นผู้เชี่ยวชาญเฉพาะด้าน รวามทั้งผู้ที่ต้องการเพิ่มพูนความรู้ทางด้านเทคโนโลยี ที่ต้องการก้าวให้ทันกับการเปลี่ยนแปลงอย่างรวดเร็วในโลกสังคมออนไลน์</p>
			<p>
				<a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">ดูรายละเอียด เพิ่มเติม &raquo;</a>
			</p>
		</div>

		<!-- jumbotron -->

		<!-- image card -->

<div class="container">
	<div class="row">
	<h4>ติดตามข่าวสารและกิจกรรมหลักสูตรวิศวกรรมเว็บไซต์ได้ที่นี่ และ Fanpage Facebook<a href="hhttps://www.facebook.com/webengineering">@WebEngineering</a></h4>
	</div>
<hr>
			
<?php

for($i=1; $i<=$num_activity; $i++){
	$row_activity = mysqli_fetch_assoc($query_activity);
	
	if(($row_activity[pk_activity]%2)!=0){
	echo "<a href='page/detail_activity.php?idactivity=".$row_activity[pk_activity]."'><div class='row row-margin-bottom'>";
	echo "<div class='col-md-5 no-padding lib-item' data-category='view'>";
	echo "<div class='lib-panel'>";
	echo "<div class='row box-shadow'>";
	echo "<div class='col-md-6'>";

	$sql_img = "select * from gallery where pk_activity = ".$row_activity[pk_activity]." ";
	$query_img = mysqli_query($con,$sql_img);
	$result_img = mysqli_fetch_assoc($query_img);

	echo "<img class='lib-img-show' height='200' src='img/activity/".$result_img[path_gallery]."'>";
	echo "</div>";
	echo "<div class='col-md-6'>";
	echo "<div class='lib-row lib-header'>";
	echo $row_activity[head_activity];
	echo "<div class='lib-header-seperator'></div>";						
	echo "</div>";			
	echo "<div class='lib-row lib-desc'>";					
	echo $row_activity[title_activity];
	echo "</div>";
	echo "</div>";	
	echo "</div>";	
	echo "</div>";	
	echo "</div></a>";
	echo "<div class='col-md-1'></div>";				
	}else{
	echo "<a href='page/detail_activity.php?idactivity=".$row_activity[pk_activity]."'><div class='col-md-5 no-padding lib-item' data-category='ui'>";
	echo "<div class='lib-panel'>";
	echo "<div class='row box-shadow'>";
	echo "<div class='col-md-6'>";

	$sql_img = "select * from gallery where pk_activity = ".$row_activity[pk_activity]." ";
	$query_img = mysqli_query($con,$sql_img);
	$result_img = mysqli_fetch_assoc($query_img);

	echo "<img class='lib-img-show' height='200' src='img/activity/".$result_img[path_gallery]."'>";
	echo "</div>";
	echo "<div class='col-md-6'>";
	echo "<div class='lib-row lib-header'>";
	echo $row_activity[head_activity];
	echo "<div class='lib-header-seperator'></div>";
	echo "</div>";
	echo "<div class='lib-row lib-desc'>";
	echo $row_activity[title_activity];
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</div></a>";
	echo "</div>";
	}
}


for($i=1; $i<=$num_news; $i++){
	$row_news = mysqli_fetch_assoc($query_news);
	
	if(($row_news[pk_news]%2)!=0){
	echo "<a href='page/detail_news.php?idactivity=".$row_news[pk_news]."'><div class='row row-margin-bottom'>";
	echo "<div class='col-md-5 no-padding lib-item' data-category='view'>";
	echo "<div class='lib-panel'>";
	echo "<div class='row box-shadow'>";
	echo "<div class='col-md-6'>";

	$sql_img = "select * from gallery where pk_news = ".$row_news[pk_news]." ";
	$query_img = mysqli_query($con,$sql_img);
	$result_img = mysqli_fetch_assoc($query_img);

	echo "<img class='lib-img-show' height='200' src='img/news/".$result_img[path_gallery]."'>";
	echo "</div>";
	echo "<div class='col-md-6'>";
	echo "<div class='lib-row lib-header'>";
	echo $row_news[head_news];
	echo "<div class='lib-header-seperator'></div>";						
	echo "</div>";			
	echo "<div class='lib-row lib-desc'>";					
	echo $row_news[title_news];
	echo "</div>";
	echo "</div>";	
	echo "</div>";	
	echo "</div>";	
	echo "</div></a>";
	echo "<div class='col-md-1'></div>";				
	}else{
	echo "<a href='page/detail_news.php?idactivity=".$row_news[pk_news]."'><div class='col-md-5 no-padding lib-item' data-category='ui'>";
	echo "<div class='lib-panel'>";
	echo "<div class='row box-shadow'>";
	echo "<div class='col-md-6'>";

	$sql_img = "select * from gallery where pk_news = ".$row_news[pk_news]." ";
	$query_img = mysqli_query($con,$sql_img);
	$result_img = mysqli_fetch_assoc($query_img);

	echo "<img class='lib-img-show' height='200' src='img/news/".$result_img[path_gallery]."'>";
	echo "</div>";
	echo "<div class='col-md-6'>";
	echo "<div class='lib-row lib-header'>";
	echo $row_news[head_news];
	echo "<div class='lib-header-seperator'></div>";
	echo "</div>";
	echo "<div class='lib-row lib-desc'>";
	echo $row_news[title_news];
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</div></a>";
	echo "</div>";
	}
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
	<script type="text/javascript" src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
</body>
</html>