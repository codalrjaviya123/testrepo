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
	$call = $client->account->calls->create("+16193206293", "+919723000463", "http://demo.twilio.com/docs/voice.xml", array());
	echo $call->sid;
}
catch (Services_Twilio_RestException $e) {
	print_r($e);
}