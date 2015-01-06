<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);

// Get the PHP helper library from twilio.com/docs/php/install
require_once('Services/Twilio.php'); // Loads the library
// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "AC737f084daa2b528c4f187d3892107c02";
$token = "7668523096f8a8aad9d44bb507cea77a";
$client = new Services_Twilio($sid, $token);
try {
	$client->account->messages->sendMessage("+16193206293", "+919723000463", "Hi Rupal,how are you?", "http://127.0.0.1/twilio/cp.png", array());
	/*$sms = $client->account->sms_messages->create("+16193206293", "+919723000463", "All in the game, yo", array());
    echo $sms->sid;*/
}
catch(Exception $e) {
	print_r($e);
}