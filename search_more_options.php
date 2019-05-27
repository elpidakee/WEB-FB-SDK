<?php
header('Content-Type: text/html; charset=UTF-8');
require 'syndesiMeVasi.inc.php';
		
		$q1 = "SELECT name FROM categories";
		$result = $conn->query($q1);
		if ($conn->query($q1) == TRUE) {
			
		} else {
			echo "Error: ".$q1."<br>".$conn->error;
		}
		
		
$pageHeader = <<< EOHEADER
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=GFS+Neohellenic&subset=greek' rel='stylesheet' type='text/css'>
		<link href="/normalize.css" rel="stylesheet">
		<title>Stay Informed</title>
		<link rel="stylesheet" href="assets/style.css" type="text/css" media="screen" charset="utf-8"/>
	</head>
	
	<body>
	 	<header>
			<a class="admin" href="admin.php" style="color: #FFFFDC">login</a>
			<div id="head">
				<h1>Stay Informed</h1>
				<nav>
					<ul class="one">
						<li class="one"><a class="menu" href="index.php">Αρχική</a></li>
						<li><a class="menu" href="about.html">Σχετικά</a></li>
						<li><a class="menu" href="contact.html">Επικοινονία</a></li>
						<li class="two">
							<a class="menu" href="search_more_options.php">Αναζήτηση</a>
							<div class="message">
								<form  method="post" action="search.php"  id="searchform">
      								<input  id="search_head" type="text" name="keyword" placeholder="Αναζήτηση" />
      								<input  id="searchbutton" type="submit" name="submit" value="" />
      								<a class="morechoises" href="search_more_options.php">Περισότερες επιλογές</a>
    							</form>
							</div>
						</li>
						<li class="three">
							<a href="rss.xml"><img id="rss" src="assets/rss.png" border="0" /></a>
						</li>
					</ul>
				</nav>
			</div>
	  	</header>
	  	
	  	<div class="wrap">
		  	<div class="content">
		  		
			  		<h2>Αναζήτηση:</h2>
			  		<h3>Mε βάση λέξει κλειδί:</h3>
				<form method="post" action="search.php" id="formsearch">	
			  		<input class="search" type="text" name="keyword" placeholder="Αναζήτηση" />
					<input class="searchbutton" type="submit" name="gsearch" value="" />
				</form>
		      		<h3>Mε βάση την ημερομηνία που θα γίνει το event:</h3>
				<form method="post" action="search.php" id="formsearch">
			  		<input class="search" type="date" name="saerchbdate" placeholder="π.χ.(1999-01-30)" />
					<input class="searchbutton" type="submit" name="gsearch" value="" />
				</form>
			  		<h3>Mε βάση την κατηγορία:</h3>
			  		<div class="select">
					<form method="post" action="search.php" id="formsearch">
			  			<select class="category_search" name="category_search">
EOHEADER;
echo $pageHeader;

foreach($result as $row) {
	$row = "<option>${row['name']}</option>";
	echo $row;
}

$pageFooter = <<< EOFOOTER
						</select>
						<input class="searchbutton" type="submit" name="gsearch" value="" />
					</form>
				</div>
		  	</div>
	  	</div>
	</body>
</html>

EOFOOTER;

echo $pageFooter;
?>