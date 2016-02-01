$(document).ready(function(){
	$("#submit").click(function(){
		var usrnameLen = $("#email").val().length;
		var passwordLen = $("#password").val().length;
		var passconLen = $("#passcon").val().length;
		
		
		if(usrnameLen == 0 || passwordLen == 0 || passconLen == 0){
			$("#emailstatus").addClass("has-error");
			$("#passstatus").addClass("has-error");
			$("#passconstatus").addClass("has-error");
			$("#emailpasscheck").css({'color':'red'}).text("กรุณาป้อน Email และ Password ด้วยครับ");
			$("#emailicon").addClass("glyphicon glyphicon-remove");
			$("#passicon").addClass("glyphicon glyphicon-remove");
			$("#passconicon").addClass("glyphicon glyphicon-remove");
			return false;
		}else{ 
			$("#emailstatus").removeClass("has-error");
			$("#emailstatus").addClass("has-success");
			$("#passstatus").removeClass("has-error");
			$("#passstatus").addClass("has-success");
			return true;
		}
	});
});


$(document).ready(function () {
	$("#name").keyup(name);
	$("#lname").keyup(lname);
	$("#address").keyup(address);
	$("#tel").keyup(tel);
	$("#email").keyup(checkemail);
	$("#password").keyup(checkpassword);
	$("#passcon").keyup(checkpasscon);
	
	function checkemail() {
		var email = $("#email").val().length;
		$("#emailstatus").removeClass("has-error");
		$("#emailicon").removeClass("glyphicon glyphicon-remove");
		if(email==0){
			$("#emailstatus").removeClass("has-warning");
			$("#emailstatus").removeClass("has-success");
			$("#emailicon").removeClass("glyphicon glyphicon-ok");
			$("#emailicon").removeClass("glyphicon glyphicon-warning-sign");
		}
		if(email >=1){
			if (email > 5){
			$("#emailstatus").addClass("has-success");
			$("#emailstatus").removeClass("has-warning");
			$("#emailicon").removeClass("glyphicon glyphicon-warning-sign");
			$("#emailicon").addClass("glyphicon glyphicon-ok");
			}else{
			$("#emailstatus").addClass("has-warning");
			$("#emailstatus").removeClass("has-success");
			$("#emailicon").removeClass("glyphicon glyphicon-warning-ok");
			$("#emailicon").addClass("glyphicon glyphicon-warning-sign");
			}
		}
	}
	function checkpassword() {
		var password = $("#password").val().length;
		$("#passstatus").removeClass("has-error");
		$("#passicon").removeClass("glyphicon glyphicon-remove");
		if(password==0){
			$("#passstatus").removeClass("has-warning");
			$("#passstatus").removeClass("has-success");
			$("#passicon").removeClass("glyphicon glyphicon-ok");
			$("#passicon").removeClass("glyphicon glyphicon-warning-sign");
		}
		if(password >=1){
			if (password > 5){
				
			$("#passstatus").addClass("has-success");
			$("#passstatus").removeClass("has-warning");
			$("#passicon").removeClass("glyphicon glyphicon-warning-sign");
			$("#passicon").addClass("glyphicon glyphicon-ok");
			}else{
			$("#passstatus").addClass("has-warning");
			$("#passstatus").removeClass("has-success");
			$("#passicon").removeClass("glyphicon glyphicon-warning-ok");
			$("#passicon").addClass("glyphicon glyphicon-warning-sign");
			}
		}
	}
	function checkpasscon() {
		var passwordval = $("#password").val();
		var passconval = $("#passcon").val();
		
		var passcon = $("#passcon").val().length;
		$("#passconstatus").removeClass("has-error");
		$("#passconicon").removeClass("glyphicon glyphicon-remove");
		if(passcon==0){
			$("#passconstatus").removeClass("has-warning");
			$("#passconstatus").removeClass("has-success");
			$("#passconicon").removeClass("glyphicon glyphicon-ok");
			$("#passconicon").removeClass("glyphicon glyphicon-warning-sign");
		}
		if(passcon >=1){
			if (passwordval == passconval){
			$("#passconstatus").removeClass("has-warning");
			$("#passconstatus").addClass("has-success");
			
			$("#passconicon").removeClass("glyphicon glyphicon-warning-sign");
			$("#passconicon").addClass("glyphicon glyphicon-ok");
			}else{
			 $("#passconstatus").removeClass("has-success");
			$("#passconstatus").addClass("has-warning");
			
			$("#passconicon").removeClass("glyphicon glyphicon-warning-ok");
			$("#passconicon").addClass("glyphicon glyphicon-warning-sign");
			}
		}
	}

});