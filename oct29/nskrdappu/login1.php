<?php include('server2.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Agent Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login1.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user" Onclick="donationcompleted.php">Login</button>
		</div>
                <div class="input-group">
                     <button type="reset" class="btn" value="Reset">Reset</button>
                </div>
                <p>
               <a href="forgetpassword.php">Forgot password</a>
</p>



		<p>
			Not yet an agent? <a href="register1.php">Sign up</a>
		</p>
	</form>


</body>
</html>