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
	use Facebook\Entities\AccessToken;
	use Facebook\FacebookSDKException;
	
	echo '<?xml version=\"1.0\" encoding=\"utf-8\"?>';
	
	session_start();
	
	FacebookSession::setDefaultApplication('409690922567843', '3edb36a84212ff9cc2c9b1090f13a35f'); // add access_tok

	$session = FacebookSession::newAppSession();
	$accessToken =	'CAAF0nJnoSKMBAAGM8gm6KFZAnJvggNWZCnspmBZBFlrt8uGaKxZCrsW4SGlbWbZCaQj3rjD1xI6ecPwEATzpePEpecAOpV2ZC0t91J9W45z2pmIXbro8us4up5bydSikScWtz0p9ZAkeoZCQHaPHhMj5c4mPGLQwF1EkCa42iKlsr5kKVJzuFppiLIfZCuhOIbpi97UMA6QhkGDxnhwjSZB1vGp1fgKBN95KUjKTCY7HR7xgZDZD';
	$session = new FacebookSession ($accessToken);
	
	$bla = $session->getSessionInfo('409690922567843', '3edb36a84212ff9cc2c9b1090f13a35f');
	print_r($bla);
	
	$q1 = "SELECT `fb_id` FROM `resources`";
	$result = $conn->query($q1);
	
	if($session) {
		foreach($result as $id) {
			$search_data = new FacebookRequest($session, 'GET', '/'.$id["fb_id"].'/events?fields=cover,description,start_time,updated_time,name,id');
			
			
			$object = $search_data->execute();
			$response = $object->getRawResponse();
			
			$string = preg_replace_callback('#\\\\u([0-9a-f]{4})#ism',create_function('$matches', 'return mb_convert_encoding(pack("H*", $matches[1]), "UTF-8", "UCS-2BE");'), $response);
			
			$data = json_decode($string, true);
			
			
			
			foreach($data as $item) {
				if($item != null) {
					foreach($item as $row) {
						$asd = date_parse($row['start_time']);
						$start_time =  $asd['year']."-".sprintf("%02d", $asd['month'])."-".sprintf("%02d", $asd['day'])." ".sprintf("%02d", $asd['hour']).":".sprintf("%02d", $asd['minute']).":".sprintf("%02d", $asd['second']);
						
						$asd = date_parse($row['updated_time']);
						$updated_time =  $asd['year']."-".sprintf("%02d", $asd['month'])."-".sprintf("%02d", $asd['day'])." ".sprintf("%02d", $asd['hour']).":".sprintf("%02d", $asd['minute']).":".sprintf("%02d", $asd['second']);
						
						$q2 = "INSERT INTO `events`(`facebook_id`, `description`, `name`, `resource_owner`, `urlCover`, `category`, `date`, `updated_time`) VALUES ('".$row['id']."','".$row['description']."','".$row['name']."','".$id['fb_id']."','".$row['cover']['source']."',' ','".$start_time."','".$updated_time."') WHERE `".$row['id']."` NOT EXISTS";
						$conn->query($q2);
						
						echo "(".$row['id'].",".$row['description'].",".$row['name'].",".$id['fb_id'].",".$row['cover']['source'].",,".$start_time.",".$updated_time.")\n";
					}
				}	
			}
		}
	}
?>