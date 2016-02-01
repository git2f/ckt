<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome Admin</title>
<link href="../Image/decoration/NN.ico" rel="shortcut icon" type="image/x-icon" />
<link rel="stylesheet" href="../../bootstrap-3.3.5-dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="../../css/style.css" />
<script type="text/javascript" src="../../jquery/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="../../jquery/login.js"></script>
</head>

<body style="background-color:#f2f2f2">
<div class="container" style="margin-top:50px;">
  <div class="row">
    <div class="col-sm-6 col-md-4 col-md-offset-4">
      <div class="panel panel-default" style="box-shadow: rgba(0,0,0,0.3) 0 5px 10px;">
        <div class="panel-heading"> <strong> ล็อกอินเข้าสู่ระบบ</strong> </div>
        <div class="panel-body">
          <form role="form" action="check_login.php" method="POST">
            <fieldset>
              <div class="row">
                <div class="center-block"> <img class="profile-img"
											src="Img/avatar_user.png" title="unknow user"> </div>
              </div>
              <div class="row">
                <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                  <div class="form-group" id="emailstatus">
                    <div class="input-group"> <span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i> </span>
                      <input class="form-control" placeholder="Email" id="email" name="loginname" type="email" 
                      value="<?php echo $_COOKIE['loginname'];?>" >
                      <span class="form-control-feedback" id="emailicon" aria-hidden="true"></span>
                    </div>
                  </div>
                  <div class="form-group" id="passstatus">
                    <div class="input-group"> <span class="input-group-addon"> <i class="glyphicon glyphicon-lock"></i> </span>
                      <input class="form-control" placeholder="Password" id="pass" name="password" type="password" 
                      value="<?php echo $_COOKIE['password'];?>" >
                      <span class="form-control-feedback" id="passicon" aria-hidden="true"></span>
                    </div>
                    <div id="emailpasscheck"></div>
                  </div>
                  <div class="form-group">
                    <input type="submit" id="submit" class="btn btn-lg btn-success btn-block" value="Sign in">
                  </div>
                  <div class="form-group">
                    <div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="remember"/>
                          จำรหัสผ่าน </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
        <div class="panel-footer "> ยังไม่ไดสมัครสมาชิกคลิกที่นี่ <a href="register.php" onClick=""> Sign Up Here </a> </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>