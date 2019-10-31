<?php
session_start();
$username=$_SESSION['username'];
$foodname=$_SESSION['foodname'];
$quantity=$_SESSION['quantity'];
$hygiene_level=$_SESSION['hygiene_level'];
$expiry_time_expected=$_SESSION['expiry_time_expected'];
$address=$_SESSION['address'];
$cooked_time=$_SESSION['cooked_time'];


$authKey = "299379AH3ZmUpki5da87125";
$senderId = "HELLOV";


$mobileNumber=8328179402;
$msg="Username :".$username."  Foodname : paneer".$foodname."   Quantity  : ".$quantity."   Hygiene level : ".$hygiene_level."  expriry time expected : ".$expiry_time_expected."  address : ".$address."  cooked time : ".$cooked_time;
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



?>




