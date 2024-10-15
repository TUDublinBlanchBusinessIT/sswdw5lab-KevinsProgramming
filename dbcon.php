<?php
$servername = "javelin";
$username = "B00005555";
$password = "B00005555";
$dbname = "B00005555";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
