<?php

  define('FACEBOOK_SDK_V4_SRC_DIR', '/facebook-php-sdk-v4-4.0-dev/src/Facebook/');
  require __DIR__ . '/facebook-php-sdk-v4-4.0-dev/autoload.php';

    use Facebook\FacebookSession;
    use Facebook\FacebookRequest;

	FacebookSession::setDefaultApplication('904386622952592','64aeb7d6f72539a9a45f3e1746da594f'); //ki edw prosoxi,exw valei ta ids tou stayInformed pou eftiaksa
    $graphURL = " http://graph.facebook.com/v.2.3/";

	$session = FacebookSession::newAppSession();
	$accessToken = $session->getAccessToken();
	$session = new FacebookSession ($accessToken);

	$request = new FacebookRequest ($session,'GET','904386622952592/events?fields=cover,description,id,name,owner,place,start_time');
	
	$response = $request->execute();
	$graphObject = $response->getGraphObject()->asArray();

	print_r($graphObject);

	$jsonplace = $graphURL."904386622952592/events?fields=cover,description,id,name,owner,place,start_time&access_token=".$accessToken;
	
	$events = json_decode(file_get_contents($jsonplace),true);
	print_r($events);
?>