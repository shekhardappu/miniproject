<?php 
if(isset($_GET['value'])){
$email=$_GET['value'];
$to =$email;
$subject = "donation request" ;
$body = "donation data";
$headers = 'From: admin fooddonation@gmail.com' . "\r\n" ;
$headers .='Reply-To: '. $to . "\r\n" ;
$headers .='X-Mailer: PHP/' . phpversion();
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";   
if(mail($to, $subject, $body,$headers)) {
echo('<br>'."Email Sent ".'</br>');
} 
else {
echo("<p>Email Message delivery failed...</p>");
}}
 ?>