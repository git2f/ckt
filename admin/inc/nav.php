<div class="navbar navbar-default" style="background: #337ab7; color: #f5f5f5; font-size: 18px; font-weight: bolder; margin: 0px; padding: 7px 20px; -webkit-border-radius: 0; -moz-border-radius: 0; border-radius: 0;">
    <div class="container">
      <div class="col-lg-2 col-sm-2 col-xs-4" ><h3>WE DPU</h3></div>
      <div class="col-lg-offset-8 col-xs-offset-4 col-sm-2 col-xs-4" style="margin-top:23px;">
      <a style="color:#FFF;" href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user"> <?=$_SESSION["name_user"]?></i> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="../../login/logout.php"><i class="fa fa-cog fa-spin"></i>  Profile</a></li>
            <li><a href="../../login/logout.php"><i class="fa fa-lock"></i>  Change Password</a></li>
            <li><a href="../../login/logout.php"><i class="fa fa-sign-out"></i>  Log out</a></li>
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
  <!-- =========== Alert ===============-->