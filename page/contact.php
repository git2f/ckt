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
    <style>
      #map {
        width: 100%;
        height: 700px;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map');
        var mapOptions = {
          center: new google.maps.LatLng(13.870900,100.550999),
          zoom: 15,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
        var myLatLng = {lat: 13.870900, lng: 100.550999};
        var marker = new google.maps.Marker({
		    position: myLatLng,
		    map: map,
		    title: 'Hello World!'
		  });
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>
<body class="full">
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
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="e-learning.php">ห้องสมุด</a></li>
                        <li class="active"><a href="contact.php">ติดต่อเรา</a></li>
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
    </div>
<div class="container">
    <div class="well clearfix">
        <div class="row">
            <div class="col-md-3">
                <label class="control-label" for="firstname">ชื่อ</label>
                <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Your First Name" />

                <label class="control-label" for="lastname">นามสกุล</label>
                <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Your Last Name" />

                <label class="control-label" for="email">Email Address</label>
                <input class="form-control" type="text" name="email" id="email" placeholder="Your email address" />

                <label class="control-label" for="subject" >เรื่อง</label>
                <select class="form-control" id="subject" id="subject" name="subject">
                    <option selected value="na">Choose One:</option>
                    <option value="service">General Customer Service</option>
                    <option value="suggestions">Suggestions</option>
                    <option value="product">Product Support</option>
                </select>
            </div>

            <div class="col-md-9">
                <label class="control-label">ข้อความ</label>
                <textarea class="input-xlarge form-control" id="message" name="message" rows="10"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <br/>
                <button class="btn btn-primary pull-right" type="submit">Send</button>
            </div>
        </div>
        </div>
        </div>
        <div class="container">
    <div class="well clearfix">
        <div class="row">
        	<div class="col-xs-12">
        		<div id="map"></div>
        	</div>
        </div>
        </div>
        </div>
    </div>


<div class="container">
        <hr>

        <!-- Footer -->
        <footer>
            <div class="row coming-soon">
                <div class="col-lg-12">
                    <p>Copyright &copy; WeDpu 2015</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->
    <!-- Gallery -->
</div>
 <!-- /container -->
<script type="text/javascript" src="../bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
</body>
</html>