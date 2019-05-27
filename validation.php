<?php
	$value = $_GET['query'];
	$formfield = $_GET['field'];
	if ($formfield == "website") {
		if (!filter_var($value, FILTER_VALIDATE_URL)) {
			echo "Invalid website";
		} 
		else {
			echo "<span>Valid</span>";
		}
	}
	if ($formfield == "website2") {
		if (!filter_var($value, FILTER_VALIDATE_URL)) {
			echo "Invalid website";
		} 
		else {
			echo "<span>Valid</span>";
		}
	}
?>

