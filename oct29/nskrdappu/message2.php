<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Document</title>
 
</head>
<body>
 <div class="container">
   <div class="jumbotron">
   <h1>Admin sends messages agents and donor</h1>
    <hr>
        <div class="row">
           <div class="col-md-6">
               <form action="message2.php" method="POST">
                   <div class="form-group">
                       <label for="exampleInputPassword1">Mobile number</label>
                        <input type="number" class="form-control" id="number" name="number" placeholder="Enter Number">

                   </div>
                   <div class="form-group">
                       <label for="exampleInputPassord1">Message</label>
                       <textarea class="form-control" name="message" id="message" cols="30" rows="30"></textarea>
                  </div>
                 <button type="submit" name="sendmsg" class="btn btn-primary">Send Message</button>
                  <div class="input-group">
                     <button type="reset" class="btn" value="Reset">Reset</button>
                </div>
                 </form>
           </div>
        </div>
  </div>
</div>
</body>
</html>


<?php
$authKey = "299379AH3ZmUpki5da87125";
$senderId = "HELLOV";

 if(isset($_POST['sendmsg']))
{
$mobileNumber=$_POST['number'];
$msg=$_POST['message'];
$message = urlencode($msg);

$route = "default";

$postData = array(
    'authkey' => $authKey,
    'mobiles' => $mobileNumber,
    'message' => $message,
    'sender' => $senderId,
    'route' => $route
);
$url="http://api.msg91.com/api/sendhttp.php";

$ch = curl_init($url);
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
    //,CURLOPT_FOLLOWLOCATION => true
));

//Ignore SSL certificate verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

//get response
$response = curl_exec($ch);

//Print error if any
if(curl_errno($ch))
{
    echo 'error:' . curl_error($ch);
}

curl_close($ch);

echo '<script>alert("your message have been sent to '.$mobileNumber.' by this '.$response.'")</script>';


}
?>



























