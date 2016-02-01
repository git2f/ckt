<?php session_start();
include_once("../../../BackEnd/config/config3.inc.php");
date_default_timezone_set("Asia/Bangkok");
if(empty($_SESSION["name_user"])){
  include("../../../BackEnd/function/redirect.php");
  redirect("../../login/login.php");
  echo "<div class='container' style='margin-top:50px;'>";
  echo "<div align='center'>";
  echo "<img src='../../../img/decoration/Load.gif' width='100'>";
  echo "<font color='red'>คุณต้องล็อกอินก่อนครับ!!!</font> กรุณาล็อกอิน กำลังกลับใน 
  <span id='timer' style='color:red;'>5</span> วินาที";
  echo "</div>";
  echo "</div>";
}
else{
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <style type="text/css">
  #demo1{
    background: url(../../../img/decoration/tia-3.png) right center no-repeat ;
  }
  </style>
  <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="../css/style.css" rel="stylesheet" type="text/css">
  <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

  <script src="../js/jquery.js" type="text/javascript"></script>
  <script src="../js/angular.js" type="text/javascript"></script>
  <script src="../js/bootstrap.min.js" type="text/javascript"></script>
  <script src="../js/main.js" type="text/javascript"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
  <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>

</head>
<body>
<?php
include_once("../inc/nav.php");
?>
<div class="subnavbar">
    <div class="subnavbar-inner">
      <div class="container">
        <ul class="mainnav"> 
          <li id="dashboard"><a href="../index.php"><i class="fa fa-pie-chart"></i><span>รายงาน</span> </a> </li>
          <li id="news"><a href="../news_module/news.php"><i class="fa fa-newspaper-o"></i><span>ข่าวสาร</span> </a> </li>
          <li id="activity"><a href="../activity_module/activity.php"><i class="fa fa-line-chart"></i><span>กิจกรรม</span> </a> </li>
          <li id="article"><a href="../article_module/article.php"><i class="fa fa-file-text-o"></i><span>บทความ</span> </a> </li>
          <li id="type"><a href="type.php"><i class="fa fa-cogs"></i><span>ประเภท</span> </a> </li>
          <li id="gallery"><a href="../gallery_module/pic.php"><i class="fa fa-picture-o"></i><span>Gallery</span> </a> </li>
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

  <!-- Content -->

<div class="container">
  <div class="row">
    <div class="col-md-12">

      <div class="panel panel-default">
        <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-cogs"></i> จัดการประเภท</h3></div>
        <div class="panel-body">

          <div role="tabpanel">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#tab1" aria-controls="report" role="tab" data-toggle="tab">เพิ่มประเภทข่าวสาร</a></li>
              <li role="presentation"><a href="#tab2" aria-controls="income" role="tab" data-toggle="tab">เพิ่มประเภทกิจกรรม</a></li>
              <li role="presentation"><a href="#tab3" aria-controls="pay" role="tab" data-toggle="tab">เพิ่มประเภทบทความ</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

              <div role="tabpanel" class="tab-pane active" id="tab1" ng-controller="reportCtrl">

                <form id="tab1" class="form-horizontal" rule="form">

                  <legend></legend>

                  <div class="form-group">
                    <label class="col-md-2 control-label">ชื่อประเภทข่าวสาร</label>
                    <div class="col-md-8">
                      <input type="text" name="head_news" class="form-control">
                    </div>
                  </div>
                    
                  
                  <div class="form-group">
                    <div class="col-md-2 text-right"></div>
                    <div class="col-md-8 text-left">
                      <button class="btn btn-primary" data-toggle="tooltip" title="บันทึกรายการลงฐานข้อมูล" type="submit" ng-click="cusSave()"><i class="fa fa-save"></i> บันทึกข้อมูล</button>
                    </div>
                  </div>

                </form>

              </div>

              <div role="tabpanel" class="tab-pane" id="tab2" ng-controller="reportCtrl">

                <form id="tab2" class="form-horizontal" rule="form">

                  <legend></legend>

                  <div class="form-group">
                    <label class="col-md-2 control-label">ชื่อประเภทกิจกรรม</label>
                    <div class="col-md-8">
                      <input type="text" name="head_news" class="form-control">
                    </div>
                  </div>
                    
                  
                  <div class="form-group">
                    <div class="col-md-2 text-right"></div>
                    <div class="col-md-8 text-left">
                      <button class="btn btn-primary" data-toggle="tooltip" title="บันทึกรายการลงฐานข้อมูล" type="submit" ng-click="cusSave()"><i class="fa fa-save"></i> บันทึกข้อมูล</button>
                    </div>
                  </div>

                </form>

              </div>

              <div role="tabpanel" class="tab-pane" id="tab3" ng-controller="payCtrl">

                <form id="tab3" class="form-horizontal" rule="form" action="account_pay.php" method="post">

                  <legend></legend>

                  <div class="form-group">
                    <label class="col-md-2 control-label">ชื่อประเภทบทความ</label>
                    <div class="col-md-8">
                      <input type="text" name="head_news" class="form-control">
                    </div>
                  </div>
                    
                  
                  <div class="form-group">
                    <div class="col-md-2 text-right"></div>
                    <div class="col-md-8 text-left">
                      <button class="btn btn-primary" data-toggle="tooltip" title="บันทึกรายการลงฐานข้อมูล" type="submit" ng-click="cusSave()"><i class="fa fa-save"></i> บันทึกข้อมูล</button>
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
      $("#type").addClass('active');
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

    $(function () {
        $('#date_start_news').datetimepicker();
    });
    $(function () {
        $('#date_stop_news').datetimepicker();
    });

  </script>
</script>


</body>
</html>
<?php
}?>