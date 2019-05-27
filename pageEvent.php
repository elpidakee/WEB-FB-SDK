<?php
	
	header('Content-Type: text/html; charset=UTF-8');
	require 'syndesiMeVasi.inc.php';
	$r_id = $_POST['id'];
	
	$pageHeader = <<< EOHEADER
	
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
	<html lang='el'>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
			<link href='https://fonts.googleapis.com/css?family=GFS+Neohellenic&subset=greek' rel='stylesheet' type='text/css'>
			<link href="/normalize.css" rel="stylesheet">
			<title>Stay Informed</title>
			<link rel="stylesheet" href="assets/style.css" type="text/css" media="screen" charset="utf-8"/>
			<link rel="stylesheet" href="style.css" type="text/css" media="screen" charset="utf-8"/>
								
			<style type="text/css">
				  div#bd {
					position: relative;
				}
				div#gmap {
					width: 500px;
					height: 400px;
				}
			</style>
		</head>
		
		<meta charset="utf-8"/>

		<body>
			<div  id = "big_wrapper">
				<header>
					<a class="admin" href="admin.php" style="color: #FFFFDC">login</a>
					<div id="head">
						<h1>Stay Informed</h1>
						<nav>
							<ul class="one">
								<li class="one"><a class="menu" href="index.php">Αρχική</a></li>
								<li><a class="menu" href="about.html">Σχετικά</a></li>
								<li><a class="menu" href="contact.html">Επικοινωνία</a></li>
								<li class="two">
									<a class="menu" href="search_more_options.php">Αναζήτηση</a>
									<div class="message">
										<form  method="post" action="search.php"  id="searchform">
											<input  id="search_head" type="text" name="keyword" placeholder="Αναζήτηση" />
											<input  id="searchbutton" type="submit" name="submit" value="" />
										</form>
										<a class="morechoises" href="search_more_options.php">Περισσότερες επιλογές</a>
									</div>
								</li>
								<li class="three">
									<a href="#"><img id="rss" src="assets/rss.png" border="0" /></a>
								</li>
							</ul>
						</nav>
					</div>
				</header>
			</div>
EOHEADER;

echo $pageHeader;

	$q1 = "SELECT id,name,updated_time,place_name,category,place_id,description,urlCover FROM events WHERE events.id = $r_id "; //rss
	
	
	$result = mysqli_query($conn,$q1);
	
	if($result != false)
	{
		
		foreach($result as $row)
		{
			$q2 = "SELECT id,img_url, latitude, longitude FROM resources WHERE resources.fb_id = ".$row['place_id'].""; //ki edw rss
			$row = "
				<article>
					<table>
						<h2>Event: ${row['name']} </h2><br></br>
						<p style=\"word-wrap:break-word;\">  <b>Περιγραφή :</b> ${row['description']} <br></br> <b>Κατηγορία :</b>${row['category']}<br></br> <b>Ώρα :</b>${row['updated_time']}<br></br> <b> Mέρος :</b> ${row['place_name']}<br></br></p>
					</table>
				</article>
				<article>
					<img src=\"${row['urlCover']}\" width=\"200\" />
				</article>";
			echo $row;
		}
	}
	$result2 = mysqli_query($conn,$q2);
	
	if($result2 != false)
	{
		
		foreach($result2 as $row)
		{
			
			$row = "
				<article>
					<div >
					<table>
						<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
						<script type=\"text/javascript\">
							
								var map;
								var marker=false;
								function initialize() {
								   
								  var myLatlng = new google.maps.LatLng(${row['latitude']},${row['longitude']});
								 
								  var myOptions = {
									zoom: 12,
									center: myLatlng,
									mapTypeId: google.maps.MapTypeId.ROADMAP
								  }
								 
								  map = new google.maps.Map(document.getElementById(\"gmap\"), myOptions);
								 
								  marker = new google.maps.Marker({
										  position: myLatlng,
										  map: map
									  });
								   
								  google.maps.event.addListener(map, 'center_changed', function() {
									  var location = map.getCenter();
									document.getElementById(\"lat\").innerHTML = location.lat();
									document.getElementById(\"lon\").innerHTML = location.lng();
									placeMarker(location);
								  });
								  google.maps.event.addListener(map, 'zoom_changed', function() {
									  zoomLevel = map.getZoom();
									document.getElementById(\"zoom_level\").innerHTML = zoomLevel;
								  });
								  google.maps.event.addListener(marker, 'dblclick', function() {
									zoomLevel = map.getZoom()+1;
									if (zoomLevel == 20) {
									 zoomLevel = 10;
									   }  
									document.getElementById(\"zoom_level\").innerHTML = zoomLevel;
									map.setZoom(zoomLevel);
								   
								  });
									document.getElementById(\"zoom_level\").innerHTML = 8;
									document.getElementById(\"lat\").innerHTML = ${row['latitude']};
									document.getElementById(\"lon\").innerHTML = ${row['longitude']};
								}
								 
								function placeMarker(location) {
								  var clickedLocation = new google.maps.LatLng(location);
								  marker.setPosition(location);
								}
								window.onload = function(){initialize();};
							
						</script>
					</table>
					</div>
				</article>
				<br></br><br></br>
					<article>
						<table>
							<div id=\"bd\">
								<div id=\"gmap\"></div>
								lat:<span id=\"lat\"></span> lon:<span id=\"lon\"></span><br/>
								zoom level: <span id=\"zoom_level\"></span>
							</div>  
						</table>
					</article>";
   		    
			echo $row;
		}
	}
	echo "</html>";

?>