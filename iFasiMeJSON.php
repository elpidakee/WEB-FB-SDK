<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_web";
//vBFhWwbXjYy8Jr9D
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$conn->query("SET NAMES 'utf8'");
$conn->query("SET CHARACTER SET 'utf8'");

//read the json file contents
    $jsondata = file_get_contents('dataLithografeio.json');
	
//convert json object to php associative array
    $data = json_decode($jsondata, true);
	
/*get the data
    $id = $data['id'];
    $description = $data['description'];
    $place = $data['personal']['gender']; //εδω να δω τι παιζει με τα address
    $name = $data['personal']['age'];
    $owner = $data['personal']['address']['streetaddress'];
    $urlCover = $data['personal']['address']['city'];
    $category = $data['personal']['address']['state'];
    $date = $data['personal']['address']['postalcode'];
    $wra = $data['profile']['designation'];*/  //asto na paei sto diaolo olo to sxoliasmeno
	
	//print_r($data);
	
	/* insert data into DB */
    foreach($data as $item) {
		// mysql_query("INSERT INTO `project_web`.`events` (id, description, name, place, owner, urlCover, category, wra) VALUES ('".$item['name']."', '".$item['description']."', '".$item['address']."', '".$item['owner']."', '".$item['cover_id']."', '".$item['category']."', '".$item['start_time']."')");
		foreach($item as $row) {
			echo $row['id']."\n";
		}

    }
	
  //database connection close
    mysql_close($con);

   //}
   ?>
   


<!--/*$sql = "INSERT INTO events (id, name, date, urlCover)
VALUES ('123asd','nikos', '2015-05-13', 'http://upload.wikimedia.org/wikipedia/en/thumb/4/43/Feed-icon.svg/128px-Feed-icon.svg.png')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();*/
-->