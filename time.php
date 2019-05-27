<?php

	header('Content-Type: text/html; charset=UTF-8');

	

	$strtime = strtotime('2012-04-24T22:01:00+0000');
	$time = date("Y-m-d H:i:s", $strtime);

	// metatroph ths wras
	$asd = date_parse('2012-04-24T22:01:00+0000');
	$timestamp =  $asd['year']."-".sprintf("%02d", $asd['month'])."-".sprintf("%02d", $asd['day'])." ".sprintf("%02d", $asd['hour']).":".sprintf("%02d", $asd['minute']).":".sprintf("%02d", $asd['second']);
	echo $timestamp."\n";


	require 'syndesiMeVasi.inc.php';

	
	// anti gia NOT EXISTS des to mia gt den mou leitourgei me NOT EXIST den kserw gt gamietai
	$q1 = "SELECT id, facebook_id, description, name, place_id, urlCover, category, date FROM events WHERE facebook_id LIKE '987654321'";

	$qwe = $conn->query($q1);

	print_r($qwe); // ektipvnei ta stoixeia ws pinaka
	
	if($qwe != false) {
		echo "mlkies\n";
	}
	else {
		$q2 = "INSERT INTO `events`(`facebook_id`, `description`, `name`, `resource_owner`, `urlCover`, `category`, `date`, `updated_time`) VALUES ('987654321','αδσφξ δασλφκξ καφες αδσφκλ΄ασδφβ΄λ<ζδξφ αδσλφκξ ','κλαδφκα΄λξ','0987654321','','','','')";
		if($conn->query($q2) == true) {
			echo 'yeah';
		}
	}
?>