<div class="contactForm">
	<?php
	 	echo $this->element('contactUsBox');
	?>
</div>
<div class="footer">
	<?php 
		echo $this->element('footer'); 
	?>
</div>

<script>
$(document).ready(function(){
	$('#submitBtn').click(function(e){
		if( ($("#fname").val() == '') || ($("#lname").val() == '') || ($("#email").val() == '') || ($("#message").val() == '')){
			//e.preventDefault();
			//alert('Please make sure all values have been entered.');
		}
	});
});
</script>