<?php
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'registration');
$village=$_SESSION['village'];
$query="select email from agent where village='$village'";
			$results = mysqli_query($db, $query);
			if (mysqli_num_rows($results) != 0) {
			$row = $result->fetch_assoc();
			$mail=$row["email"];
			header('location: shekhar.000webhostapp.com/sendmail.php?value='.$mail);
			}
			else {
 			echo "0 results";
			}
	
?>