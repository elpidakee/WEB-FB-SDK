<?php
	header('Content-Type: text/html; charset=UTF-8');
	require 'syndesiMeVasi.inc.php';
	

$pageHeader = <<< EOHEADER
<!DOCTYPE HTML>
<html>
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
								<a class="morechoises" href="search_more_options.php">Περισότερες επιλογές</a>
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

if (isset($_POST["keyword"])) 
{
	$keyword = $_POST['keyword'];
	
	if($keyword != '') {
		
		$conn->query("SET NAMES 'utf8'");
		$conn->query("SET CHARACTER SET 'utf8'");
		
		$q1 = "SELECT id, name, description, date, place_id, category, urlCover FROM events WHERE events.name LIKE '%".$keyword."%' OR description LIKE '%".$keyword. "%' OR place_id LIKE '%".$keyword."%'";

		$result = $conn->query($q1);
		

		if($result != false) {
			foreach($result as $row) {
			$id = $row['id'];
			$res = "
				<article>
					<table>
						<td><img class=\"eimg\" src=\"${row['urlCover']}\" /></td>
						<td class=\"text\">
							<h2>${row['name']}</h2>
							<small>${row['date']}<br /></small>							
							<p>${row['description']}</p>
							<form class=\"moreinfo\">
								<input class=\"button\" type=\"submit\" value=\"Περισσότερα...\" >  <!--onclick=\"openWin()\"-->
						<a type=\"button\" method =\"post\" href = pageEvent.php value =\"Περισσότερα\">
						<input type=\"hidden\" name=\"id\"  value=\"$id\">
							</form>
						</td>
					</table>
				</article>";
				echo $res;
			}
		}
		else {
			echo "<div class=\"wrap\">
				<div class=\"content\">
					<p style=\"color: #DBDBE4\">Δεν βρέθηκαν αποτελέσματα!</p>
				</div>
			</div>";
		}
	}
	else {
		echo "<div class=\"wrap\">
				<div class=\"content\">
					<p style=\"color: #DBDBE4\">Δεν δόθηκε λέξη κλειδί για αναζήτηση!</p>
				</div>
			</div>";
	}
}

elseif(isset($_POST["saerchbdate"])) 
{
	$saerchbdate = $_POST['saerchbdate'];
	
	if($saerchbdate != '') {
		$q1 = "SELECT id, name, description, date, place_id, category, urlCover FROM events WHERE date LIKE '%" .$saerchbdate.  "%'"; 

		$result = mysqli_query($conn,$q1);

		if($result != false) {
			foreach($result as $row) {
			$id = $row['id'];
			$res = "
				<article>
					<table>
						<td><img class=\"eimg\" src=\"${row['urlCover']}\" /></td>
						<td class=\"text\">
							<h2>${row['name']}</h2>
							<small>${row['date']}<br /></small>							
							<p>${row['description']}</p>
							<form class=\"moreinfo\">
								<input class=\"button\" type=\"submit\" value=\"Περισσότερα...\" >  <!--onclick=\"openWin()\"-->
						<a type=\"button\" method =\"post\" href = pageEvent.php value =\"Περισσότερα\">
						<input type=\"hidden\" name=\"id\"  value=\"$id\">
							</form>
						</td>
					</table>
				</article>";
				echo $res ;
			}
		}
		else {
			echo "<div class=\"wrap\">
				<div class=\"content\">
					<p style=\"color: #DBDBE4\">Δεν βρέθηκαν αποτελέσματα!</p>
				</div>
			</div>";
		}
	}
	else {
		echo "<div class=\"wrap\">
				<div class=\"content\">
					<p style=\"color: #DBDBE4\">Δεν δόθηκε ημερομηνία για αναζήτηση!</p>
				</div>
			</div>";
	}
}

elseif(isset($_POST["category_search"])) 
{
	$category_search = $_POST['category_search'];
	
	$q1 = "SELECT id, name, description, date, place_id, category, urlCover FROM events WHERE category LIKE '%".$category_search."%'";

	$result = mysqli_query($conn,$q1);

	if($result != false) {
		foreach($result as $row) {
		$res = "
			<article>
				<table>
					<td><img class=\"eimg\" src=\"${row['urlCover']}\" /></td>
					<td class=\"text\">
						<h2>${row['name']}</h2>
						<small>${row['date']}<br /></small>							
						<p>${row['description']}</p>
						<form class=\"moreinfo\">
							<!--<input class=\"more\" type=\"button\" value=\"Περισσότερα...\" >-->
							<a type=\"button\" method =\"post\" href = pageEvent.php value =\"Περισσότερα\">
						<input type=\"hidden\" name=\"id\"  value=\"${row['id']}\">
						</form>
					</td>
				</table>
			</article>";
			echo $res ;
		}
	}
	else {
		echo "<div class=\"wrap\">
			<div class=\"content\">
				<p style=\"color: #DBDBE4\">Δεν βρέθηκαν αποτελέσματα!</p>
			</div>
		</div>";
	}
}

echo <<< EOFOOTER
			<script>
				function openWin() {
					window.open("selida_event.php","_blank","toolbar=yes, location=yes, directories=no, status=no, menubar=yes, scrollbars=yes, resizable=no, copyhistory=yes, width=400, height=400");
				}

				function imgError() {
					alert('The image could not be loaded.');
				}
			</script>
		</div>
	</body>
</html>

EOFOOTER;



?>