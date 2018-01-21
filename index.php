<?php
session_start();
	if(isset($_POST['submit']))
	{
		$email = $_POST['email'];
		$email_enc = md5($email);
		// echo $email_enc;
		$_SESSION['ses'] = 1;

	}


?>
<!-- adding comments testing for more-->
<!DOCTYPE html>
<html>
<head>
	<title>Know Your Gravatar</title>
</head>
<body>
	<center> <h1> Know Your Gravatar<br><br><br>
		<form method="POST" action="">
			<input type="email" name="email" placeholder="Your email" required>
			<button onclick = "POSTme()" name="submit">Find Me!</button>
		</form>
		<br><br>
		<div class="img">
			
			<?php 
				if (isset($_SESSION['ses'])) {
					echo '<img id= "imageid" src="https://gravatar.com/avatar/'.$email_enc.'?s=200">';
					// echo $email_enc;
					unset($_SESSION['ses']);
					session_destroy();
				}
			 ?>
		</div>

	</center>
	



</body>
</html>
