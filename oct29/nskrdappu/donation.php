                
<?php include('server1.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Donorform</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Donation</h2>
	</div>
	
	<form method="post" action="donation.php">

		<?php include('errors.php'); ?>
                 
                <div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username;?>" minlength="5" maxlength="20">
		</div>
                <div class="input-group">
			<label>Food name</label>
			<input type="text" name="food_name" value="<?php echo $food_name;?>" minlength="5" maxlength="50">
		</div>
                <div class="input-group">
			<label>Quantity</label>
			<input type="text" name="quantity" value="<?php echo $quantity;?>" >
		</div>
                <div class="input-group">
			<label>Hygiene_level</label>
			<input type="text" name="hygiene_level" value="<?php echo $hygiene_level;?>">
		</div>
                <div class="input-group">
			<label>Cooked_time</label>
			<input type="text" name="cooked_time" value="<?php echo $cooked_time;?>">

		</div>
               <div class="input-group">
			<label>Expiry_time_expected</label>
			<input type="text" name="expiry_time_expected" value="<?php echo $expiry_time_expected;?>">
               </div>

                <div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="<?php echo $address;?>">
		</div>
                
		<div class="input-group">
			<button type="submit" class="btn" name="reg_donation" Onclick="success.php" >Submit</button>
		</div>
                <div class="input-group">
                     <button type="reset" class="btn" value="Reset">Reset</button>
                </div>
</form>
</body>
</html>
	