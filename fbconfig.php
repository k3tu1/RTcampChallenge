<?php

if (!session_id()) {
	session_start();
}
require_once __DIR__ . '/vendor/autoload.php';
/*Facebook\Facebook is a service class provides an easy interface for working with all the components of the SDK.
It passes an array of configuration options to the constructor.*/
$fb = new Facebook\Facebook([
	'app_id' => 'Enter Your App id', //Your App ID
	'app_secret' => 'Enter Your sceret key', //Your App Secret
	'default_graph_version' => 'v2.10',
]);
$app_id = ''; //Type here also
$app_secret = '';

?>
