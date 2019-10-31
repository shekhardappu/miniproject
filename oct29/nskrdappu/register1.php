<?php include('server2.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Agent Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register1.php">

		<?php include('errors.php'); ?>

		        <div class="input-group">
			<label>username</label>
			<input type="text" name="username" value="<?php echo $username;?>">
		</div>
		        <div class="input-group">
			<label>Aadharnumber</label>
			<input type="number" name="aadharnumber" value="<?php echo $aadharnumber; ?>">
		</div>
                            
		
                        <div class="input-group">
			<label>city</label>
			<input type="text" name="city" value="<?php echo $city; ?>">
		</div>
                        <div class="input-group">
			<label>Village</label>
			<input type="text" name="village"  value="<?php echo $village; ?>">
		</div>
		
                        <div class="input-group">
			<label>vechile_color</label>
			<input type="text" name="vechile_color" value="<?php echo $vechile_color; ?>">
		</div>
                      <div class="input-group">
			<label>Vechile_number</label>
			<input type="text" name="vechile_number" value="<?php echo $vechile_number; ?>">
		</div>
                     <div class="input-group">
			<label>Email</label>
			<input type="text" name="email" pattern=".+@gmail.com" value="<?php echo $email; ?>">
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
			<button type="submit" class="btn" name="reg_user" onclick="alert(ValidCaptcha());" >Register</button>
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