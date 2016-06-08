<div class="contactBox col-md-4 col-md-offset-4 padtop"> 
	<h1> Contact Us </h1>
	<div class="contactContent">
		<form class="form-horizontal" method="post" enctype="application/x-www-form-urlencoded">

			<label class="padInput" for="fname">First Name: </label>
				<span class="alert"><?php if(!empty($fnameError)){ echo $fnameError;} ?></span>
				<input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" value="<?php if($_POST){echo $_POST['fname'];}?>">

			<label class="padInput" for="lname">Last Name:  </label>
				<span class="alert"><?php if(!empty($lnameError)){ echo $lnameError;} ?></span>
				<input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" value="<?php if($_POST){echo $_POST['lname'];}?>">

			<label class="padInput" for="email"> Email:	</label>	
				<span class="alert"><?php if(!empty($emailError)){ echo $emailError;} ?></span>
				<input type="text" class="form-control" id="email" name="email" placeholder="janedoe@email.com" value="<?php if($_POST){echo $_POST['email'];}?>">

			<label class="padInput" for="message"> Message:	</label>
				<span class="alert"><?php if(!empty($messageError)){ echo $messageError;} ?></span>	
				<textarea class="form-control" id="message" name="message" placeholder="Enter a message" ><?php if($_POST){echo $_POST['message'];}?></textarea></br>
				
			<button type="submit" class="btn btn-default" style="margin-top:25px;" id="submitBtn"> Submit </button>
		</form>
	</div>
</div>
