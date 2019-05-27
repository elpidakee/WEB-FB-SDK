<?php
	require 'syndesiMeVasi.inc.php';

	$q1 = "SELECT id, facebook_id, description, name, place_id, urlCover, category, date, place_name FROM events ORDER BY date ASC LIMIT 10";
	$result = $conn->query($q1);
	if ($conn->query($q1) == TRUE) {
		
	} else {
		echo "Error: ".$q1."<br>".$conn->error;
	}

	$header = "<?xml version=\"1.0\"?>
		<rss version=\"2.0\">
		<channel>";
	file_put_contents('rss.xml', $header);
	foreach($result as $row) {
		$desstr = $row['description'];
		
		$row = "
			<item>
				<title>${row['name']}</title>
				<description>${desstr}</description>
			</item>";
		file_put_contents('rss.xml', $row,  FILE_APPEND);
	}
	file_put_contents('rss.xml', "</channel></rss>",  FILE_APPEND);
?>