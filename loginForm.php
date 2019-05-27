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
	<meta charset="utf-8"/>
	<body>
		<div  id = "big_wrapper">
	 	<header>
			<!--<a class="admin" href="index.php" style="color: #FFFFDC">logout</a>-->
			<div id="head">
				<h1>Stay Informed</h1>
			</div>
	  	</header>
		</div>
		<div>
			<article>
				<h3>Δώστε όνομα και κωδικό για να εισέλθετε στο σύστημα ως διαχειριστής</h3>
				<form action='check_login_admin.php' method='post'>
					Όνομα_Διαχειριστή:*<br>
					<input type='text' name='adminame' value=''>
					<br>
					Κωδικός:*<br>
					<input type='password' name='password' value=''>
					<br>
					<input type='submit' value='Είσοδος'>
					<br></br>
				</form>
			</article>
		</div>
	</body>
</html>