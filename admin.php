<?php
	session_start();
	if((isset($adminame))){
		header("location:loginForm.php");
	}
?>

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
		<script src="script.js"></script>
	</head>
	<meta charset="utf-8"/>
	<body>
	 	<header>
			<a class="admin" href="logout_admin.php" style="color: #FFFFDC">logout</a>
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
      								<input  id="search_head" type="text" name="keyword" placeholder="Αναζήτηση" >
      								<input  id="searchbutton" type="submit" name="submit" value="" >
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
		<div class="wrap">	
			<div class="content">
				<h2>Επεξεργασία των resourses</h2>
				<form id="myForm" action="insertURL.php" method="post" name="myForm">
					<table>
						<td>
							<p>URL για εισαγωγή</p>
						</td>
						<td>
							<input id='website1' name='website' onblur="validate('website', this.value)" type='text'>
						</td>
						<td>
							<div id="website"></div>
						</td>
					</table>
					<input onclick="checkForm()" type='button' value='Submit' />
				</form>
				
				

				<form id="myForm2" action="deleteURL.php" method="post" name="myForm2">
					<table>
						<td>
							<p>URL για διαγραφή</p>
						</td>
						<td>
							<input id='website3' name='website2' onblur="validate('website2', this.value)" type='text'>
						</td>
						<td>
							<div id="website2"></div>
						</td>
					</table>
					<input onclick="checkForm2()" type='button' value='Submit' >
				</form>
			</div>
		</div>
	</body>
</html>