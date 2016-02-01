<?php
function redirect($page)
{
?>
	<script type="text/javascript">
	var pastTime = 2
	function mycountdown(){ 
		  if(pastTime > 0) { 
				pastTime -= 1; 
				document.getElementById('timer').innerHTML = pastTime; 
		  } 
	if(pastTime < 1) { 
				window.location = "<?=$page?>";
		  } 
	} 
		if(pastTime >0){
			setInterval(mycountdown,1000); 
		}
	</script>
<?php
}
?>