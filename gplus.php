<?php
require_once 'vendor/autoload.php';

// $client = new Google_Client();
// $client->setAuthConfig('client_secret.json');
// $client->setAccessType("offline");
// $client->setIncludeGrantedScopes(true);
// $client->addScope(Google_Service_Drive::DRIVE_METADATA_READONLY);
// $client->setRedirectUri('http://' . $_SERVER['HTTP_HOST'] . '/google_auth/oauth2callback.php');
// //$client->setRedirectUri('http://' . $_SERVER['HTTP_HOST'] . '/gplus.php');

// $auth_url = $client->createAuthUrl();

// header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));

// $client->authenticate($_GET['code']);

// $access_token = $client->getAccessToken();

// $client->setAccessToken($access_token);

// $drive = new Google_Service_Drive($client);

// $files = $drive->files->listFiles(array())->getItems();

//****************
session_start();

$client = new Google_Client();
$client->setAuthConfig('client_secret.json');
//$client->addScope(Google_Service_Drive::DRIVE_METADATA_READONLY);
$client->addScope("https://www.googleapis.com/auth/plus.login");

if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
  $client->setAccessToken($_SESSION['access_token']);
  $drive = new Google_Service_Drive($client);
  $files = $drive->files->listFiles(array())->getFiles();
  echo json_encode($files);
} else {
  $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/google_auth/oauth2callback.php';
  header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}

?>