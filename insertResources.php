<?php
	define('FACEBOOK_SDK_V4_SRC_DIR', 'facebook-php-sdk-v4-4.0-dev/src/Facebook/');
	require __DIR__ . '/facebook-php-sdk-v4-4.0-dev/autoload.php';
	
	require 'syndesiMeVasi.inc.php';
	
	use Facebook\FacebookSession;
	use Facebook\FacebookRequest;
	use Facebook\GraphUser;
	use Facebook\FacebookRequestException;
	use Facebook\FacebookRedirectLoginHelper;
	use Facebook\FacebookCanvasLoginHelper;
	
	session_start();
	
	FacebookSession::setDefaultApplication('409690922567843', '3edb36a84212ff9cc2c9b1090f13a35f'); // add access_tok

	$session = FacebookSession::newAppSession();
	$accessToken = $session->getAccessToken();
	$session = new FacebookSession ($accessToken);
	
	if($session) {
		$search_data = (new FacebookRequest($session, 'GET', '/search?type=adcity&q=patra&limit=400&type=place&center=38.2466,21.7346&distance=1000'));
		$object = $search_data->execute();
		$response = $object->getRawResponse();
		
		$string = preg_replace_callback('#\\\\u([0-9a-f]{4})#ism',create_function('$matches', 'return mb_convert_encoding(pack("H*", $matches[1]), "UTF-8", "UCS-2BE");'), $response);
		
		$data = json_decode($string, true);
		
		print_r($data);
		foreach($data as $item) {
			foreach($item as $row) {
				$q1 = "INSERT INTO `resources`(`name`, `url`, `fb_id`, `active`, `street`, `latitude`, `longitude`) VALUES ('".$row['name']."','','".$row['id']."', true, '".$row['location']['street']."','".$row['location'] 'latitude']."','".$row['location']['longitude']."') WHERE `".$row['id']."` NOT EXISTS";
				$conn->query($q1);
			}
		}
	}
?>
