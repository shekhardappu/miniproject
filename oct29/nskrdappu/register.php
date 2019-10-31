<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Donor Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username;?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" pattern=".+@gmail.com" value="<?php echo $email; ?>">
		</div>
                            
		<div class="input-group">
			<label>Mobileno</label>
			<input type="text" name="mobileno" pattern="[6789][0-9]{9}" minlength="10" maxlength="10" value="<?php echo $mobileno; ?>">
		</div>
                            <div class="input-group">
			<label>AadhaarNo</label>
			<input type="text" name="adhaarno" pattern="[0-9]{12}" value="<?php echo $adhaarno; ?>">
		</div>
                            <div class="input-group">
			<label>Date of Birth</label>
			<input type="date" name="Date of Birth"  value="<?php echo $bday; ?>">
		</div>
                                <div class="">
			<label>Gender</label> 
                                  </div> 

                            <div class="">
			

                                          Female<input type="radio"name="gender" value="female">
			<?php if (isset($gender) &&$gender=="female") echo"checked";?>
                                          
                                          
                                          Male<input type="radio"name="gender"
                                          <?php if (isset($gender) && 
                                          $gender=="male") echo"checked";?> 
                                           value="male">
                                           Other<input type="radio"name="gender"
                                           <?php if (isset($gender) && 
                                           $gender=="other") echo"checked";?>
                                           svalue="other">
		</div>
		
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1" minlength="4">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2" minlength="4">
<script type="text/javascript">
                 function Captcha(){
                     var alpha = new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
                     var i;
                     for (i=0;i<6;i++){
                       var a = alpha[Math.floor(Math.random() * alpha.length)];
                       var b = alpha[Math.floor(Math.random() * alpha.length)];
                       var c = alpha[Math.floor(Math.random() * alpha.length)];
                       var d = alpha[Math.floor(Math.random() * alpha.length)];
                       var e = alpha[Math.floor(Math.random() * alpha.length)];
                       var f = alpha[Math.floor(Math.random() * alpha.length)];
                       var g = alpha[Math.floor(Math.random() * alpha.length)];
                      }
                    var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e + ' '+ f + ' ' + g;
                    document.getElementById("mainCaptcha").value = code
                  }
                  function ValidCaptcha(){
                      var string1 = removeSpaces(document.getElementById('mainCaptcha').value);
                      var string2 = removeSpaces(document.getElementById('txtInput').value);
                      if (string1 == string2){
                        return true;
                      }
                      else{        
                        return false;
                      }
                  }
                  function removeSpaces(string){
                    return string.split(' ').join('');
                  }
             </script>    
        </head>
     <body onload="Captcha();">
        <table>
          <tr>
           <td>
                 <br />
           </td>
          </tr>
          <tr>
           <td>
             <input type="text" id="mainCaptcha"/>
              <input type="button" id="refresh" value="Refresh" onclick="Captcha();" />
           </td>
          </tr>
          <tr>
           <td>
            <input type="text" id="txtInput"/>    
          </td>
         </tr>
         <tr>
          <td>
           
          </td>
        </tr>
      </table>






		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user" onclick="alert(ValidCaptcha());">Register</a></button>
		</div>
<div class="input-group">
                     <button type="reset" class="btn" value="Reset">Reset</button>
                </div>
		<p>
			Already an agent? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>