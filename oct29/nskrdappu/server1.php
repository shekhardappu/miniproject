<?php 
	session_start();

	// variable declaration
 	      $username = "";
	      $food_name    = "";
              $quantity ="";
              $hygiene_level ="";
              $cooked_time="";
              $expiry_time_expected ="";
              $address ="";
              $db="registration";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	// REGISTER DONOR	
	if (isset($_POST['reg_donation'])) {

		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$food_name = mysqli_real_escape_string($db, $_POST['food_name']);
                $quantity = mysqli_real_escape_string($db, $_POST['quantity']);
                $hygiene_level = mysqli_real_escape_string($db, $_POST['hygiene_level']);
		$cooked_time=mysqli_real_escape_string($db, $_POST['cooked_time']);
		$expiry_time_expected=mysqli_real_escape_string($db,$_POST['expiry_time_expected']);
		$address=mysqli_real_escape_string($db, $_POST['address']);
	
		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($food_name)) { array_push($errors, "food_name is required"); }
                if (empty($quantity)) { array_push($errors, "quantity is required"); }
                if (empty($hygiene_level))  { array_push($errors, "hygiene_level is required"); }
		if (empty($cooked_time)) { array_push($errors, "cooked_time is required"); }
                if (empty($expiry_time_expected)) { array_push($errors, "expiry_time_expected is required"); }
                if (empty($address)) { array_push($errors, "address is required"); }

		

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			
			$query = "INSERT INTO donation (username, food_name, quantity, hygiene_level, cooked_time,expiry_time_expected, address) 
					  VALUES('$username','$food_name','$quantity','$hygiene_level','$cooked_time','$expiry_time_expected','$address')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Thanks for Donation";
			$_SESSION['village']=$address;
			$_SESSION['foodname']=$foodname;
			$_SESSION['quantity']=$quantity;
			$_SESSION['hygiene_level']=$hygiene_level;
			$_SESSION['expiry_time_expected']=$expiry_time_expected;
			$_SESSION['address']=$address;
			$_SESSION['cooked_time']=$cooked_time;
			header('location: message1.php');
		}

	}
