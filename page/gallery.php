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
	<!-- Add fancyBox -->
	<link rel="stylesheet" href="../fancyapps-fancyBox-18d1712/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	<script type="text/javascript" src="../fancyapps-fancyBox-18d1712/source/jquery.fancybox.pack.js?v=2.1.5"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".fancybox").fancybox({
				openEffect	: 'none',
				closeEffect	: 'none'
			});
		});
	</script>
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
						<li><a href="../index.php">หน้าแรก</a></li>
						<li class="active"><a href="gallery.php">Gallery</a></li>
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

		<!-- Gallery -->
		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Gallery
					<small>รวมรูปภาพของสาขา</small>
				</h1>
			</div>
		</div>
		<!-- /.row -->

		<!-- Projects Row -->
		<div class="row">
			<div class="col-md-3 portfolio-item">
				<a class="fancybox" rel="gallery1" href="../img/testimage/1.jpeg" title="Hi MR.Worasit">
					<img class="img-responsive" src="../img/testimage/1.jpeg" height="450" width="750" alt="" />
				</a>
			</div>
			<div class="col-md-3 portfolio-item">
				<a class="fancybox" rel="gallery1" href="../img/testimage/2.jpg" title="Hi MR.Worasit">
					<img class="img-responsive" src="../img/testimage/2.jpg" height="450" width="750" alt="" />
				</a>
			</div>
			<div class="col-md-3 portfolio-item">
				<a class="fancybox" rel="gallery1" href="../img/testimage/3.jpg" title="Hi MR.Worasit">
					<img class="img-responsive" src="../img/testimage/3.jpg" height="450" width="750" alt="" />
				</a>
			</div>
			<div class="col-md-3 portfolio-item">
				<a class="fancybox" rel="gallery1" href="../img/testimage/4.jpg" title="Hi MR.Worasit">
					<img  src="../img/news/news1.jpg" height="151.5" width="255" alt="" />
				</a>
			</div>
		</div>
		<!-- /.row -->

		<!-- Projects Row -->
		<div class="row">
			<div class="col-md-3 portfolio-item">
				<a class="fancybox" rel="gallery2" href="../img/testimage/5.jpeg" title="Hi MR.Worasit">
					<img class="img-responsive" src="../img/testimage/5.jpeg" height="450" width="750" alt="" />
				</a>
			</div>
			<div class="col-md-3 portfolio-item">
				<a href="#">
					<img class="img-responsive" src="http://placehold.it/750x450" alt="">
				</a>
			</div>
			<div class="col-md-3 portfolio-item">
				<a href="#">
					<img class="img-responsive" src="http://placehold.it/750x450" alt="">
				</a>
			</div>
			<div class="col-md-3 portfolio-item">
				<a href="#">
					<img class="img-responsive" src="http://placehold.it/750x450" alt="">
				</a>
			</div>
		</div>
		<!-- /.row -->

		<!-- Projects Row -->
		<div class="row">
			<div class="col-md-3 portfolio-item">
				<a href="#">
					<img class="img-responsive" src="http://placehold.it/750x450" alt="">
				</a>
			</div>
			<div class="col-md-3 portfolio-item">
				<a href="#">
					<img class="img-responsive" src="http://placehold.it/750x450" alt="">
				</a>
			</div>
			<div class="col-md-3 portfolio-item">
				<a href="#">
					<img class="img-responsive" src="http://placehold.it/750x450" alt="">
				</a>
			</div>
			<div class="col-md-3 portfolio-item">
				<a href="#">
					<img class="img-responsive" src="http://placehold.it/750x450" alt="">
				</a>
			</div>
		</div>
		<!-- /.row -->

		<hr>

		<!-- Pagination -->
		<div class="row text-center">
			<div class="col-lg-12">
				<ul class="pagination">
					<li>
						<a href="#">&laquo;</a>
					</li>
					<li class="active">
						<a href="#">1</a>
					</li>
					<li>
						<a href="#">2</a>
					</li>
					<li>
						<a href="#">3</a>
					</li>
					<li>
						<a href="#">4</a>
					</li>
					<li>
						<a href="#">5</a>
					</li>
					<li>
						<a href="#">&raquo;</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- /.row -->

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

	</div>
	<!-- /.container -->
	<!-- Gallery -->

</div> <!-- /container -->
<script type="text/javascript" src="../bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
</body>
</html>