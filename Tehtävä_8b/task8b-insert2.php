<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gamesdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO games (GameID, GenreID, DeveloperID, Name, ReleaseYear) VALUES ('$_POST[gameid]', '$_POST[genreid]', '$_POST[developerid]', '$_POST[name]', '$_POST[releaseyear]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>