$(document).ready(function(){
	var usrnameLen = $("#email").val().length;
	var passLen = $("#pass").val().length;

	$("#submit").click(function(){
		var usrnameLen = $("#email").val().length;
		var passLen = $("#pass").val().length;
		if(usrnameLen == 0 || passLen == 0){
			$("#emailstatus").addClass("has-error");
			$("#passstatus").addClass("has-error");
			$("#emailpasscheck").css({'color':'red'}).text("กรุณาป้อน Email และ Password ด้วยครับ");
			$("#emailicon").addClass("glyphicon glyphicon-remove");
			$("#passicon").addClass("glyphicon glyphicon-remove");
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
	$("#email").keyup(checkemail);
	$("#pass").keyup(checkpass);

	function checkemail() {
		var email = $("#email").val().length;
		if(email==0){
			$("#emailstatus").removeClass("has-warning");
			$("#emailstatus").removeClass("has-success");
			$("#emailicon").removeClass("glyphicon glyphicon-ok");
			$("#emailicon").removeClass("glyphicon glyphicon-warning-sign");
		}
		$("#emailstatus").removeClass("has-error");
		$("#emailicon").removeClass("glyphicon glyphicon-remove");
		if(email >2){
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
	function checkpass() {
		var pass = $("#pass").val().length;
		if(pass==0){
			$("#passstatus").removeClass("has-warning");
			$("#passstatus").removeClass("has-success");
			$("#passicon").removeClass("glyphicon glyphicon-ok");
			$("#passicon").removeClass("glyphicon glyphicon-warning-sign");
		}
		$("#passstatus").removeClass("has-error");
		$("#passicon").removeClass("glyphicon glyphicon-remove");
		if(pass >2){
			if (pass > 5){
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
});