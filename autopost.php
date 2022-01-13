<?php 
	require('./src/Facebook/autoload.php');
	$fb = new Facebook\Facebook([
  'app_id' => '603454967549426',
  'app_secret' => 'ed94ca774ced57aa513af86714a9ca26',
  'default_graph_version' => 'v12.0',
  ]);

$linkData = [
  'link' => 'http://www.example.com',
  'message' => '1 Post posted through API',
  ];

try {
  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->post('/me/feed', $linkData, 'EAAIk1s76jfIBANvLSgzhr9GV9PRH5ZCgmVVUH3zd2HZBRKYgKcZB5NOAZBOJsJoaLIIqPKPtpdShBxupC28UzuIDcngjzqHVRTor06qfe6SpNRY1ZCVx5EECZCyMkpGTzfki75e7ZCxzoFo4kZCpmOZBIp18O9UJfp3ImBtRSj3VaqwMMkoFE2YyPRFQuYCgiCbSOXfwMHrqERZA11qgF30lxnbhroocN1y1PaZBDabuyY7qQZDZD');
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$graphNode = $response->getGraphNode();

echo 'Posted with id: ' . $graphNode['id'];

 ?>