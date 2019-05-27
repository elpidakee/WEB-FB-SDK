<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Στοιχεια για το event</title>
	</head>
	
	
	<body>
			<div  id = "big_wrapper">
			<header id = "top_header">
				<h1>Στοιχεια για το event</h1>
			</header>
			<script>
				function openWin() {
						window.open("selida_event.php","_blank","toolbar=yes, location=yes, directories=no, status=no, menubar=yes, scrollbars=yes, resizable=no, copyhistory=yes, width=400, height=400");
				}

				function imgError() {
						alert('The image could not be loaded.');
				}
			</script>

	<?php

		require 'syndesiMeVasi.inc.php';

		$q1 = "SELECT id, name, wra, date, owner, category, urlCover FROM events ";
		$result = $conn->query($q1);
		if ($conn->query($q1) == TRUE) {
			
		} else {
			echo "Error: ".$q1."<br>".$conn->error;
		}

		if ($result->num_rows > 0) {
		// output data of each row
			while($row = $result->fetch_assoc()) {
					echo "id:".$row["id"]. "onoma_ekdilwsis:" . $row["name"]. "<br>";
					echo "diorganwtis:" .$row["owner"]. "<br>";
					echo "pote(?):" .$row["wra"]. "" .$row["date"]. "<br>";
					echo "katigoria:" .$row["category"]. "<br>" ;
			}
		} else {
		echo "0 results";
		}
	?>
		<!--<a href="<?php echo $pathimage.$imagename;?>"
				class="slide" 
				title="" 
				onclick="return hs.expand(this, $K)">
		<img src="<?php echo $pathimage2.$imagename;?>" alt="" onerror="imgError()" />
	
		</a>-->

		<form>
				<input type="button" value="Δες Λεπτομέρειες" onclick="openWin()">
		</form>

</div>
	
	</body>
	</head>
</html>