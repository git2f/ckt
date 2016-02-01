<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register Admin</title>
<link href="../Image/decoration/NN.ico" rel="shortcut icon" type="image/x-icon" />
<link rel="stylesheet" href="../../bootstrap-3.3.5-dist/css/bootstrap.min.css" />
<script type="text/javascript" src="../../jquery/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="../../bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../jquery/regis.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script type="text/javascript">
$(document).ready(function(){

	$("#btn1").click(function(){
			$.post("pass_gen_execute.php", { 
			data1: $('#alpha:input:checkbox:checked').val(), 
			data2: $('#alpha_upper:input:checkbox:checked').val(),
			data3: $('#special:input:checkbox:checked').val(),
			data4: $('#numeric:input:checkbox:checked').val(),
			data5: $("#pwlength").val()}, 
				function(result){
					$("#passgen").html(result);
					$("#password").text(result);
					$("#test").val(result);
					$("#test").tooltip('show');
					$("#test").focus();
					$("#test").select();
				}
			);

		});
	});
</script>
<script type="text/javascript">
	$(function() {
		$("#test").hover(function() {
			$(this).focus();
			$(this).select();
		});
	});
</script>
<script>
$(document).ready(function(){
    $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})  
});
</script>
<script type="text/javascript">
$(document).ready(function(){

	$("#email").keyup(function(){
			$.post("email_validate.php", { 
			data1: $("#email").val()}, 
				function(result){
					if(result=='2'){
						$("#emailvalidate").html("<font color='green'>คุณสามารถใช้อีเมลล์นี้ได้");
					}else{
						$("#emailvalidate").html("<font color='red'>อีเมลล์ซ้ำ!!! คุณไม่สามารถใช้อีเมลล์นี้ได้");
					}
				}
			);

		});
	});
</script>
</head>
<body style="background-color:#f2f2f2">

<div class="container" style="margin-top:10px;">
  <div class="row">
    <div class="col-sm-6 col-md-8 col-md-offset-2">
      <div class="panel panel-default" style="box-shadow: rgba(0,0,0,0.3) 0 5px 10px;">
        <div class="panel-heading"> <strong> สมัครสมาชิก</strong> </div>
        <div class="panel-body">
          <form role="form" action="check_register.php" method="POST" id="regiter-form">
            <fieldset>
              <div class="row">
                <div class="col-sm-12 col-md-5  col-md-offset-1 ">
                  <div class="form-group">
                    <label class="control-label"  for="username">ชื่อ</label>
                    <div class="input-group"> <span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i> </span>
                      <input class="form-control" placeholder="Name" name="name" id="name" type="text" autofocus >
                      <!-- Username --> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label"  for="username">นามสกุล</label>
                    <div class="input-group"> <span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i> </span>
                      <input class="form-control" placeholder="Lastname" name="lname" id="lname" type="text" autofocus>
                      <!-- Lastname --> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label"  for="username">ที่อยู่</label>
                    <div class="input-group"> <span class="input-group-addon"> <i class="glyphicon glyphicon-home"></i> </span>
                      <textarea class="form-control" rows="3" name="address" id="address" placeholder="บ้านเลขที่ 152 / 65 หมู่บ้าน สุขสรรค์ ต.สุขขี อ.สุขใจ กรุงเทพ 15023"></textarea>
                      <!-- address --> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label"  for="username">โทรศัพท์</label>
                    <div class="input-group"> <span class="input-group-addon"> <i class="glyphicon glyphicon-earphone"></i> </span>
                      <input class="form-control" placeholder="Telephone" name="tel" id="tel" type="text" autofocus>
                      <!-- Username --> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label"  for="username">Line Id</label>
                    <div class="input-group"> <span class="input-group-addon"> <i class="glyphicon glyphicon-comment"></i> </span>
                      <input class="form-control" placeholder="Line Id" name="line" type="text" autofocus>
                      <!-- Username --> 
                    </div>
                  </div>
                  <p class="help-block">หากต้องการติดต่อทางร้านทางแชท</p>
                  <div class="form-group">
                    <label class="control-label"  for="username">Captcha</label>
                      <div class='g-recaptcha' data-sitekey='6Ldp0gYTAAAAAN_SFrz0zLsqrMVCKvEXL6DJiYiS'></div>
                      <p class="help-block">คลิกเพื่อผ่านการตรวจสอบ</p>
                  </div>
                </div>
                
                <!-- Column 2   Column 2   Column 2   Column 2   Column 2 -->
                <div class="col-sm-12 col-md-5 ">
                  <label class="control-label"  for="username">Password Generate</label>
                  <div class="form-group" >
                    <form method="post" action="pass_gen_execute.php">
                      <table border="0" width="100%">
                          <tr>
                              <td><input checked="checked" type="checkbox" name="alpha" id="alpha" value="alpha"/> อักษรพิมพ์เล็ก a-z</td>
                              <td><input checked="checked" type="checkbox" name="alpha_upper" id="alpha_upper" value="alpha_upper"/ /> 
                              อักษรพิมพ์ใหญ่ A-Z</td>
                          </tr>
                          <tr>
                              <td><input  type="checkbox" name="special" id="special" value="special" /> อักขระพิเศษ</td>
                              <td><input checked="checked" type="checkbox" name="numeric" id="numeric" value="numeric" /> เลข(0-9)</td>
                          </tr>
                          <tr>
                           <td>ความยาวพาสเวิด<input type="text" name="pwlength" id="pwlength" 
                           size="2" maxlength="2" value="9" /></td>
                           <td><input type="button" id="btn1" value="Generate">
                           </td>
                          </tr>
                      </table>
                    </form>
                  </div>
                  <div class="form-group">
                    <label class="control-label"  for="username">Generate Password</label>
                    <input type="text" class="test" id="test" data-toggle="tooltip" data-placement="top" title="Ctrl + C">
                    <font color="#44B747"><h4><b><div id="passgen">QKAn2S2lC</div></b></h4></font>
                    <p class="help-block">เพิ่มความปลอดภัยของรหัสผ่านคุณด้วย <br />Password Genarator  </p>
                  </div>
                  <div class="form-group" id="emailstatus">
                    <label class="control-label"  for="username">E-mail <font color="red">*</font></label>
                    <div class="input-group"> <span class="input-group-addon"> <i class="glyphicon glyphicon-envelope"></i> </span>
                      <input class="form-control" placeholder="Email" name="email" id="email" type="text" autofocus>
                      <span class="form-control-feedback" id="emailicon" aria-hidden="true"></span>
                      <!-- Username --> 
                    </div>
                  </div>
                  <p class="help-block" id="emailvalidate">กรุณากรอก อีเมลล์</p>

                  <div class="form-group" id="passstatus">
                    <label class="control-label"  for="username">Password <font color="red">*</font></label>
                    <div class="input-group"> <span class="input-group-addon"> <i class="glyphicon glyphicon-lock"></i> </span>
                      <input class="form-control" placeholder="Password" name="password" id="password" type="password" autofocus>
                      <span class="form-control-feedback" id="passicon" aria-hidden="true"></span>
                      <!-- Username --> 
                    </div>
                  </div>
                  <p class="help-block">กรุณากรอกรหัสผ่าน ไม่ต่ำกว่า 6 ตัวอักษร</p>
                  <div class="form-group" id="passconstatus">
                    <label class="control-label"  for="username">Password (Confirm) <font color="red">*</font></label>
                    <div class="input-group"> <span class="input-group-addon"> <i class="glyphicon glyphicon-lock"></i> </span>
                      <input class="form-control" placeholder="Password (confirm)" name="passcon" id="passcon" type="password" autofocus>			<span class="form-control-feedback" id="passconicon" aria-hidden="true"></span>
                      <!-- Username --> 
                    </div>
                  </div>
                  <p class="help-block">กรอกรหัสผ่าน ( อีกครั้ง )</p>
                  <div id="emailpasscheck"></div>
                </div>
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                  <div class="form-group" align="center">
                    <input type="submit" id="submit" class="btn btn-lg btn-success btn-block" value="Register">
                  </div>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
        <div class="panel-footer "> มี account อยู่แล้วคลิกที่นี่ <a href="login.php" onClick=""> Sign In Here </a> </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>