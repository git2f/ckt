<?php session_start();
include_once("../../function/config3.inc.php");
$tab = $_GET["tab"];
switch ($tab) {
  case '1':
    $active1 = active;
    break;
  case '2':
    $active2 = active;
    break;
  case '3':
    $active3 = active;
    break;
  default:
    $active1 = active;
    break;
}
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
  <link rel="stylesheet" type="text/css" href="../../bootstrap-3.3.5-dist/html-editor/summernote.css">

  <script src="../js/jquery.js" type="text/javascript"></script>
  <script src="../js/angular.js" type="text/javascript"></script>
  <script src="../js/bootstrap.min.js" type="text/javascript"></script>
  <script src="../js/main.js" type="text/javascript"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
  <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
  <script src="../../bootstrap-3.3.5-dist/html-editor/summernote.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $( "#tab2" ).submit(function( ) {
    return true;
  });
});
</script>
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
          <li id="news"><a href="news.php"><i class="fa fa-newspaper-o"></i><span>ข่าวประชาสัมพัรธ์</span> </a> </li>
          <li id="activity"><a href="../activity_module/activity.php"><i class="fa fa-line-chart"></i><span>ผลงาน&กิจกรรม</span> </a> </li>
          <li id="article"><a href="../article_module/article.php"><i class="fa fa-file-text-o"></i><span>บทความ</span> </a> </li>
          <li id="type"><a href="../type_module/type.php"><i class="fa fa-cogs"></i><span>ประเภท</span> </a> </li>
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
        <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-newspaper-o"></i> จัดการข่าวสาร</h3></div>
        <div class="panel-body">

          <div role="tabpanel">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="<?php echo $active1;?>"><a href="#tab1" aria-controls="report" role="tab" data-toggle="tab">รายงานข่าวสาร</a></li>
              <li role="presentation" class="<?php echo $active2;?>"><a href="#tab2" aria-controls="report" role="tab" data-toggle="tab">เพิ่มข่าวสาร</a></li>
              <li role="presentation" class="<?php echo $active3;?>"><a href="#tab3" aria-controls="income" role="tab" data-toggle="tab">แก้ไขข่าวสาร</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

              <div role="tabpanel" class="tab-pane <?php echo $active1;?>" id="tab1" ng-controller="reportCtrl">

                <form id="tab1" action="news_db.php" method="post" enctype="multipart/form-data" class="form-horizontal" rule="form">

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

                      echo "<td><a data-title='$news[head_news]' class='example-image-link' href='../../img/upload/news/".$news[img_news]."' width='100%' data-lightbox='example-1'><img class='example-image' src='../../img/upload/news/".$news[img_news]."' height='50' width='50' alt='image-1' /></a></td>";
                      echo "<td><a href='../../file/upload/news/".$news[file_news]."'>".$news[file_news]."</a></td>";
                      echo "<td><a href='news.php?tab=3&rowid=".$news[pk_news]."'><i class='fa fa-edit'></i></a></td></tr>";
                    }
                    ?>
                  </table>

                  <a href="news.php?tab=2"><button class="btn btn-success glyphicon glyphicon-plus-sign" type="button"> เพิ่มข่าวสาร</button></a>


                </form>

              </div>

              <div role="tabpanel" class="tab-pane <?php echo $active2;?>" id="tab2" ng-controller="reportCtrl">

                <form id="tab2" action="news_db.php" method="post" enctype="multipart/form-data" class="form-horizontal" rule="form">

                  <legend></legend>

                  <div class="form-group">
                    <label class="col-md-2 control-label">หัวเรื่อง</label>
                    <div class="col-md-8">
                      <input type="text" name="head_news" class="form-control">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-md-2 control-label">รายละเอียดสั้นๆ</label>
                    <div class="col-md-8">
                      <textarea name="title_news" class="form-control"></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-2 control-label">รายละเอียดทั้งหมด</label>
                    <div class="col-md-8">
                      <textarea name="detail_news" class="form-control" id="summernote"></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-2 control-label">รูปภาพ</label>
                    <div class="col-md-8">
                      <input type="file" class="form-control" name="img_news">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-2 control-label">ไฟล์งาน</label>
                    <div class="col-md-8">
                      <div class='input-group date' id='date_start_news'>
                        <input type="file" class="form-control" name="file_news">
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <div class="col-md-2 text-right"></div>
                    <div class="col-md-8 text-left">
                      <button class="btn btn-primary" data-toggle="tooltip" title="บันทึกรายการลงฐานข้อมูล" type="submit"><i class="fa fa-save"></i> บันทึกข้อมูล</button>
                    </div>
                  </div>


                </form>

              </div>

<!-- tab3 -->

              <div role="tabpanel" class="tab-pane <?php echo $active3;?>" id="tab3" ng-controller="incomeCtrl">

                <form id="tab3" class="form-horizontal" rule="form" action="account_income.php" method="post">
                  <legend></legend>

                  <div class="form-group">
                    <label class="col-md-2 control-label">รายรับจาก</label>
                    <div class="col-md-8">
                      <select class="form-control" name="income_type">
                        <option value="1">เงินกองกลาง</option> 
                        <option value="2">เงินเดือน</option> 
                        <option value="3">รายได้เสริม</option> 
                        <option value="4">อื่นๆ</option> 
                      </select>
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

<!-- tab3 -->

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
      $("#news").addClass('active');
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

    $(document).ready(function() {
      $('#summernote').summernote({
        height: 300,                 // set editor height
        minHeight: null,             // set minimum height of editor
        maxHeight: null,             // set maximum height of editor
        focus: true                  // set focus to editable area after initializing summernote
      });
    });


  </script>
</script>


</body>
</html>
<?php
}?>