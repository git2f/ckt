<?php session_start();
include_once("../function/config3.inc.php");
date_default_timezone_set("Asia/Bangkok");
if(empty($_SESSION["name_user"])){
  include("../function/redirect.php");
  redirect("../admin/login_module/login.php");
  echo "<div class='container' style='margin-top:50px;'>";
  echo "<div align='center'>";
  echo "<img src='../../../img/decoration/Load.gif' width='100'>";
  echo "<font color='red'>คุณต้องล็อกอินก่อนครับ!!!</font> กรุณาล็อกอิน กำลังกลับใน 
  <span id='timer' style='color:red;'>5</span> วินาที";
  echo "</div>";
  echo "</div>";
}
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="../plugin/lightbox2-master/dist/css/lightbox.min.css">

  
  <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/angular.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <script src="js/main.js" type="text/javascript"></script>
  
</head>
<body>
  <div class="navbar navbar-default" style="background: #337ab7; color: #f5f5f5; font-size: 18px; font-weight: bolder; margin: 0px; padding: 7px 20px; -webkit-border-radius: 0; -moz-border-radius: 0; border-radius: 0;">
    <div class="container">
      <div class="col-lg-2 col-sm-2 col-xs-4" ><h3>WE DPU</h3></div>
      <div class="col-lg-offset-8 col-xs-offset-4 col-sm-2 col-xs-4" style="margin-top:23px;">
      <a style="color:#FFF;" href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user"> <?=$_SESSION["name_user"]?></i> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="../admin/login_module/logout.php"><i class="fa fa-cog fa-spin"></i>  Profile</a></li>
            <li><a href="../admin/login_module/logout.php"><i class="fa fa-lock"></i>  Change Password</a></li>
            <li><a href="../admin/login_module/logout.php"><i class="fa fa-sign-out"></i>  Log out</a></li>
          </ul>
      </div>
    </div>
  </div>

  <div class="subnavbar">
    <div class="subnavbar-inner">
      <div class="container">
        <ul class="mainnav"> 
          <li id="dashboard"><a href="index.php"><i class="fa fa-pie-chart"></i><span>รายงาน</span> </a> </li>
          <li id="news"><a href="news_module/news.php"><i class="fa fa-newspaper-o"></i><span>ข่าวสาร</span> </a> </li>
          <li id="activity"><a href="activity_module/activity.php"><i class="fa fa-line-chart"></i><span>กิจกรรม</span> </a> </li>
          <li id="article"><a href="article_module/article.php"><i class="fa fa-file-text-o"></i><span>บทความ</span> </a> </li>
          <li id="type"><a href="type_module/type.php"><i class="fa fa-cogs"></i><span>ประเภท</span> </a> </li>
          <li id="gallery"><a href="gallery_module/pic.php"><i class="fa fa-picture-o"></i><span>Gallery</span> </a> </li>
          <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-lock"></i><span>Dropdown</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="">เมนูที่ 1</a></li>
            <li><a href="">เมนูที่ 2</a></li>
            <li><a href="">เมนูที่ 3</a></li>
            <li><a href="">เมนูที่ 4</a></li>
          </ul>
        </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- =========== Alert ===============-->
  <div id="alertBox" class="container">
      <div id="succAlert" class="alert alert-success alert-dismissible">
        <button type="button" class="close" onclick="close_success()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>สำเร็จ</strong>&nbsp;<span class="text"></span>
      </div>
      <div id="infoAlert" class="alert alert-info alert-dismissible">
        <button type="button" class="close" onclick="close_info()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>แนะนำ</strong>&nbsp;<span class="text"></span>
      </div>
      <div id="warnAlert" class="alert alert-warning alert-dismissible">
        <button type="button" class="close" onclick="close_warn()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>คำเตือน</strong>&nbsp;<span class="text"></span>
      </div>
      <div id="errAlert" class="alert alert-danger alert-dismissible">
        <button type="button" class="close" onclick="close_err()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>ผิดพลาด</strong>&nbsp;<span class="text"></span>
      </div>
  </div>


  <!-- Content -->

<div class="container">
  <div class="row">
    <div class="col-md-12">

      <div class="panel panel-default">
        <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-pie-chart"></i> รายงาน</h3></div>
        <div class="panel-body">

          <div role="tabpanel">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#company" aria-controls="company" role="tab" data-toggle="tab">รายงานข่าวสาร</a></li>
              <li role="presentation"><a href="#document" aria-controls="document" role="tab" data-toggle="tab">รายงานกิจกรรม</a></li>
              <li role="presentation"><a href="#document" aria-controls="document" role="tab" data-toggle="tab">รายงานบทความ</a></li>
              <li role="presentation"><a href="#document" aria-controls="document" role="tab" data-toggle="tab">รายงานประเภท</a></li>
              <li role="presentation"><a href="#document" aria-controls="document" role="tab" data-toggle="tab">รายงานคลังรูปภาพ</a></li>
              <li role="presentation"><a href="#document" aria-controls="document" role="tab" data-toggle="tab">รายงานไฟล์</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="company" ng-controller="companyCtrl">

                <form id="comForm" class="form-horizontal" rule="form">
                  <legend></legend>
                    
                  <table class="table table-responsive table-bordered">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>หัวข้อข่าว</th>
                        <th>ข่าวสั้น</th>
                        <th>รายละเอียดข่าว</th>
                        <th>รูปภาพ <span class='glyphicon glyphicon-zoom-in'></span></th>
                        <th>ไฟล์</th>
                        <th>แก้ไข</th>
                      </tr>
                    </thead>
                    <?php
                    $sql_news = "SELECT * FROM `news`";
                    $query_news = mysqli_query($con,$sql_news);
                    while($news = mysqli_fetch_assoc($query_news))
                    {
                      echo "<tr align='center'><td>".$news[pk_news]."</td>";
                      echo "<td>".$news[head_news]."</td>";
                      echo "<td>".$news[title_news]."</td>";
                      echo "<td>".$news[detail_news]."</td>";
                      //echo "<td>".$news[pk_type]."</td>";

                      echo "<td><a data-title='$news[head_news]' class='example-image-link' href='../img/upload/news/".$news[img_news]."' width='100%' data-lightbox='example-1'><img class='example-image' src='../img/upload/news/".$news[img_news]."' height='50' width='50' alt='image-1' /></a></td>";
                      echo "<td><a href='../file/upload/news/".$news[file_news]."'>".$news[file_news]."</a></td>";
                      echo "<td><a href='account_edit.php?idedit=".$news[pk_pay]."'><i class='fa fa-edit'></i></a></td></tr>";
                    }
                    ?>
                  </table>

              </div>
              <div role="tabpanel" class="tab-pane" id="document" ng-controller="documentCtrl">

                <form id="docForm" class="form-horizontal" rule="form">

                  <legend></legend>

                  <div class="form-group">
                    <label class="col-md-2 control-label">พาสเวิดเก่า</label>
                    <div class="col-md-8">
                      <input type="text" ng-model="doc.tax" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-2 control-label">พาสเวิดใหม่</label>
                    <div class="col-md-8">
                      <input type="text" ng-model="doc.tax" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-2 control-label">พาสเวิดใหม่(ยืนยันอีกครั้ง)</label>
                    <div class="col-md-8">
                      <input type="text" ng-model="doc.tax" class="form-control">
                    </div>
                  </div>

                </form>

              </div>
            </div>

          </div>

        </div>
      </div>

    </div>
  </div>
</div>

  <!-- Content -->


  <script type="text/javascript">

    // Active Menu ทำไว้ในหน้า content ที่ต้องการเพื่อให้มัน active ไว้ที่เมนู ไม่ควรทำไว้ที่ header.php เพราะจะทำให้มั่วพอสมควร
    $(function(){
      $("#dashboard").addClass('active');
    });
    
    $(function(){
      $('#succAlert').hide();
      $('#infoAlert').hide();
      $('#warnAlert').hide();
      $('#errAlert').hide();

    });

    function close_success(){
      $('#succAlert').hide();
    }
    function close_info(){
      $('#infoAlert').hide();
    }
    function close_warn(){
      $('#warnAlert').hide();
    }
    function close_err(){
      $('#errAlert').hide();
    }

  </script>
<script src="../plugin/lightbox2-master/dist/js/lightbox-plus-jquery.min.js"></script>
</body>
</html>