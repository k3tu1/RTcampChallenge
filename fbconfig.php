<?php
/**
 * Created by PhpStorm.
 * User: sourabh
 * Date: 29/8/16
 * Time: 10:26 PM
 */

if (!session_id()) {
	session_start();
}
require_once __DIR__ . '/vendor/autoload.php';
/*Facebook\Facebook is a service class provides an easy interface for working with all the components of the SDK.
It passes an array of configuration options to the constructor.*/
$fb = new Facebook\Facebook([
	'app_id' => '1889073711413585', //Your App ID
	'app_secret' => '534912019bf16529ea0ef73f0d1c6e36', //Your App Secret
	'default_graph_version' => 'v2.10',
]);
$app_id = '1889073711413585'; //Type here also
$app_secret = '534912019bf16529ea0ef73f0d1c6e36';

?>
