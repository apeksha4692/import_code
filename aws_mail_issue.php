<!-- 
https://app.sendgrid.com/settings/api_keys
apkeshamajumdar@infograins.com
Apeksha@123456789 
composer require "sendgrid/sendgrid"
-->

<?php
// echo "string";die;
require 'vendor/autoload.php'; // If you're using Composer (recommended)

$SENDGRID_API_KEY = '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';
// Comment out the above line if not using Composer
// require("<PATH TO>/sendgrid-php.php");
// If not using Composer, uncomment the above line and
// download sendgrid-php.zip from the latest release here,
// replacing <PATH TO> with the path to the sendgrid-php.php file,
// which is included in the download:
// https://github.com/sendgrid/sendgrid-php/releases

$email = new \SendGrid\Mail\Mail(); 
$email->setFrom("apkeshamajumdar@infograins.com", "Ride Share");
$email->setSubject("Sending with SendGrid is Fun");
$email->addTo("apkesha.infograins@gmail.com", "Example User");
$email->addContent("text/html","<html>

            <p>Hello <b>'4581154'</b>, </p>

            <p>Your Rideshare one time password (OTP) is <b>'45'</b></p>

            <br>

            <p>Thankyou</p>

            <p><b>Ride share Team.</b></p>

            </html>");
$sendgrid = new \SendGrid($SENDGRID_API_KEY);
$sendgrid->send($email);
// if($sendgrid->send($email)){
// 	echo "send";
// }else{
// 	echo "not send";
// }
// try {
//     $response = $sendgrid->send($email);
//     print $response->statusCode() . "\n";
//     print_r($response->headers());
//     print $response->body() . "\n";
// } catch (Exception $e) {
//     echo 'Caught exception: '. $e->getMessage() ."\n";
// }