<?php 
	session_start();

	// variable declaration
 	      $username = "";
	      $aadharnumber    = "";
              $city ="";
              $village ="";
              $vechile_number="";
              $vechile_color ="";
              $email ="";
              
              $db="registration";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	// REGISTER DONOR	
	if (isset($_POST['reg_user'])) {

		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$aadharnumber = mysqli_real_escape_string($db, $_POST['aadharnumber']);
                $city = mysqli_real_escape_string($db, $_POST['city']);
                $village = mysqli_real_escape_string($db, $_POST['village']);
		$vechile_number=mysqli_real_escape_string($db, $_POST['vechile_number']);
		$vechile_color=mysqli_real_escape_string($db,$_POST['vechile_color']);
		$email=mysqli_real_escape_string($db, $_POST['email']);
                $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

	
		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($aadharnumber)) { array_push($errors, "aadharnumber is required"); }
                if (empty($city)) { array_push($errors, "city is required"); }
                if (empty($village))  { array_push($errors, "village is required"); }
		if (empty($vechile_number)) { array_push($errors, "vechile number is required"); }
                if (empty($vechile_color)) { array_push($errors, "vechile color is required"); }
                if (empty($email)) { array_push($errors, "email is required"); }
                if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = $password_1;
			$query = "INSERT INTO agent (username, aadharnumber, city, village, vechile_number,vechile_color, email,password) 
					  VALUES('$username','$aadharnumber','$city','$village','$vechile_number','$vechile_color','$email','$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Thanks for Registration";
			
			header('location: index.php');
		}

	}

//login agent 

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
			$query = "SELECT * FROM agent WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: donationsuccessful.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
?>






