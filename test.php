<?php

require_once 'vendor/autoload.php';
$client = new Google_Client();
$client->setApplicationName("webapp1");
$api_key = "AIzaSyCeFwhBjTddD-n1UO2NMbQrem-yszXRumI";
$client->setDeveloperKey( $api_key);

$service = new Google_Service_Books($client);
$optParams = array('filter' => 'free-ebooks');
$results = $service->volumes->listVolumes('Henry David Thoreau', $optParams);

foreach ($results as $item) {
  echo $item['volumeInfo']['title'], "<br /> \n";
}

?>