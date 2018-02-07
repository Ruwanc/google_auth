<?php
session_start();
require_once('google/Google/autoload.php');
$gclient = new Google_Client();
$gclient->setClientId("184422465883-ja7tn03takmshmppprjsrdrl10sronad.apps.googleusercontent.com");
$gclient->setClientSecret("VVGMGvodOs3_D5E1tPu3mhmJ");
$gclient->setApplicationName("google Login");
$gclient->setRedirectUri("http://localhost/google_auth/g-callback.php");
$gclient->addScope("https://www.googleapis.com/auth/userinfo.email")

// $client = new Google_Client();
// $client->setAuthConfig('Google/client_secret.json');

// $client->addScope("https://www.googleapis.com/auth/gmail.readonly");

// $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
// $client->setRedirectUri($redirect_uri);

// if (isset($_GET['code'])) {
//     $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
// }
?>