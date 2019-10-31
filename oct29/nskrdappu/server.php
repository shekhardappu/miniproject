<?php 
	session_start();

	// variable declaration
 	$username = "";
	$email    = "";
              $mobileno ="";
              $adhaarno ="";
              $gender="";
              $bday="";		
              $db="registration";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
                            $mobileno = mysqli_real_escape_string($db, $_POST['mobileno']);
                            $adhaarno = mysqli_real_escape_string($db, $_POST['adhaarno']);
		$gender=mysqli_real_escape_string($db, $_POST['gender']);
		$bday=mysqli_real_escape_string($db, $_POST['bday']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
                            if (empty($mobileno) && (!preg_match('/[^0-9]{10}+$/', $mobileno) )) { array_push($errors, "MobileNo is required"); }
                                              
                            if (empty($adhaarno))  { array_push($errors, "AdhaarNo is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = $password_1;//encrypt the password before saving in the database
			$query = "INSERT INTO users (username, email, mobileno, adhaarno, bday,gender, password) 
					  VALUES('$username','$email','$mobileno','$adhaarno','$bday','$gender','$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: donorr.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password=$password;
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: donorr.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>