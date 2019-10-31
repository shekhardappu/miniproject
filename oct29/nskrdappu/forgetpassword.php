<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Forget Password</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>Forgetpassword</h2>
	</div>
	
	<form method="post" action="forgetpassword.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>email</label>
			<input type="text" name="email" >
		</div>
		
		<div class="input-group">
			<button type="submit" class="btn" name="submit" Onclick="mail.php">Submit</a></button>
		</div>
</body>
</html>