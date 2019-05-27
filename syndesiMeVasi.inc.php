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


/*$sql = "INSERT INTO events (id, name, date, urlCover)
VALUES ('123asd','nikos', '2015-05-13', 'http://upload.wikimedia.org/wikipedia/en/thumb/4/43/Feed-icon.svg/128px-Feed-icon.svg.png')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();*/
?>


