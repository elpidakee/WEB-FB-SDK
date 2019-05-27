<!DOCTYPE HTML>
<html lang='el'>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=GFS+Neohellenic&subset=greek' rel='stylesheet' type='text/css'>
		<link href="/normalize.css" rel="stylesheet">
		<title>Stay Informed</title>
		<link rel="stylesheet" href="assets/style.css" type="text/css" media="screen" charset="utf-8"/>
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" charset="utf-8"/>
		
		<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script>
				  function writeAddressName(latLng) {
					  var geocoder = new google.maps.Geocoder();
					  geocoder.geocode({
					    "location": latLng
					  },
					  function(results, status) {
					    if (status == google.maps.GeocoderStatus.OK)
					    	document.getElementById("address").innerHTML = results[0].formatted_address;
					    else
						    document.getElementById("error").innerHTML += "Unable to retrieve your address" + "<br />";
					  });
				  }
			 
				  function geolocationSuccess(position) {
					var userLatLng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
					// Write the formatted address
					writeAddressName(userLatLng);
			 
					var myOptions = {
					  zoom : 16,
					  center : userLatLng,
					  mapTypeId : google.maps.MapTypeId.ROADMAP
					};
					// Draw the map
					var mapObject = new google.maps.Map(document.getElementById("map"), myOptions);
					// Place the marker
					new google.maps.Marker({
					  map: mapObject,
					  position: userLatLng
					});
					// Draw a circle around the user position to have an idea of the current localization accuracy
					var circle = new google.maps.Circle({
					  center: userLatLng,
					  radius: position.coords.accuracy,
					  map: mapObject,
					  fillColor: '#0000FF',
					  fillOpacity: 0.5,
					  strokeColor: '#0000FF',
					  strokeOpacity: 1.0
					});
					mapObject.fitBounds(circle.getBounds());
				  }
			 
				  function geolocationError(positionError) {
					document.getElementById("error").innerHTML += "Error: " + positionError.message + "<br />";
				  }
			 
				  function geolocateUser() {
					// If the browser supports the Geolocation API
					if (navigator.geolocation)
					{
					  var positionOptions = {
						enableHighAccuracy: true,
						timeout: 10 * 1000 // 10 seconds
					  };
					  navigator.geolocation.getCurrentPosition(geolocationSuccess, geolocationError, positionOptions);
					}
					else
					  document.getElementById("error").innerHTML += "Your browser doesn't support the Geolocation API";
				  }
			 
				  window.onload = geolocateUser;
			</script>
							
			<style type="text/css">
				  #map {
					width: 600px;
					height: 600px;
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
		<article id="event">
			<table>
				<?php
						//require 'core.inc.php';
						require 'syndesiMeVasi.inc.php';

						$id = $_GET['rss_id'];


						$query1 = mysql_query("SELECT id,name,date,wra,owner,category,place,description FROM events WHERE events.id = $id "); //rss
						$query2 = mysql_query("SELECT img_url FROM resources WHERE resources.id = $id"); //ki edw rss

						while($row = mysql_fetch_array($query1))
						{
							echo "<h2>Event:" .$row['id']. "</h2><br></br>";
							//echo "<div id='stoixeia'>";
							echo "<p style='word-wrap:break-word;'>  <b>Περιγραφή :</b> ".$row['description']. "<br></br> <b>Κατηγορία :</b>".$row['category']."<br></br> <b>Ημερομηνία :</b> ".$row['date']."<br></br> <b>Ώρα :</b>".$row['wra']."<br></br> <b> Διοργανωτής :</b> ".$row['owner']."<br> </br><b> Mέρος :</b> ".$row['place']. "<br></br></p>";
						    //echo "</div>";
							$a = $row;
						}

						while($row = mysql_fetch_array($query2))
						{
							echo "<img src = 'project_web.sql'" .$row['img_url']. " width='22' height='22' >&nbsp;&nbsp;";
						}
				?>
			</table>
		</article>
		<br></br><br></br>
		<article>
				<table>
						<div id="map"></div>
							<p><b>Address</b>: <span id="address"></span></p>
							<p id="error"></p>
						</div>  
				</table>
		</article>
	</body>
</html>