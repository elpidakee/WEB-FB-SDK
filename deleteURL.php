<?php
	require 'syndesiMeVasi.inc.php';
	
	if (isset($_POST["website2"])) 
	{
		$keyword = $_POST['website2'];
		echo $keyword;

		if($keyword != '') {
			
			$conn->query("SET NAMES 'utf8'");
			$conn->query("SET CHARACTER SET 'utf8'");
			
			$q1 = "DELETE FROM resources WHERE url LIKE '".$keyword."'";
			if ($conn->query($q1) == false) {
				echo "Error: ".$q1."<br>".$conn->error;
			}
			echo "OK";
		}
	}
?>