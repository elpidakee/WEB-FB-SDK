<?php
require 'syndesiMeVasi.inc.php';
session_start();
		$q1 = "SELECT id, name, description, updated_time, place_name, category, urlCover FROM events";
		$result = $conn->query($q1);
		if ($conn->query($q1) == TRUE) {
			
		} else {
			echo "Error: ".$q1."<br>".$conn->error;
		}

$pageHeader = <<< EOHEADER

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
	</head>
	
	<body>
	 	<header>
			<a class="admin" href="loginForm.php" style="color: #FFFFDC">login</a>
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
							<a href="rss.xml"><img id="rss" src="assets/rss.png" border="0" /></a>
						</li>
					</ul>
				</nav>
			</div>
	  	</header>
EOHEADER;

echo $pageHeader;

foreach($result as $row) {
	$id = $row['id'];
	$row = "
		<article>
			<table>
				<td><img class=\"eimg\" src=\"${row['urlCover']}\" /></td>
				<td class=\"text\">
					<h2>${row['name']}</h2>
					<small>${row['updated_time']}<br /></small>							
					<p>${row['description']}</p>
					<form class=\"moreinfo\" action = \"pageEvent.php\" method=\"post\">
						<input class=\"button\" type=\"submit\" value=\"Περισσότερα...\" >  <!--onclick=\"openWin()\"-->
						<a type=\"button\" method =\"post\" href = pageEvent.php value =\"Περισσότερα\">
						<input type=\"hidden\" name=\"id\"  value=\"$id\">
					</form>
				</td>
			</table>
		</article>";
		echo $row;
}
		
$pageFooter = <<< EOFOOTER
			<script>
				function openWin() {
					window.open("pageEvent.php","_blank","toolbar=yes, location=yes, directories=no, status=no, menubar=yes, scrollbars=yes, resizable=no, copyhistory=yes, width=500, height=500");
				}

				function imgError() {
					alert('The image could not be loaded.');
				}
			</script>
		</body></html>
EOFOOTER;

echo $pageFooter;
?>