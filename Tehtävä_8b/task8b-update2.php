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

$sql = "UPDATE games SET Name='$_POST[name]' WHERE GameID=$_POST[gameid]";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?> 