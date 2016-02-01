/******************************************
 *	Main.js Default Script
 */

var main = {
	succAlert: function(text){
		$('#succAlert span.text').html('').text(text);
		$('#succAlert').show();
	},
	infoAlert: function(text){
		$('#infoAlert span.text').html('').text(text);
		$('#infoAlert').show();
	},
	warnAlert: function(text){
		$('#warnAlert span.text').html('').text(text);
		$('#warnAlert').show();
	},
	errAlert: function(text){
		$('#errAlert span.text').html('').text(text);
		$('#errAlert').show();
	},
}