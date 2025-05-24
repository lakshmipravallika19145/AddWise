<?php
$host = "localhost";
$username = "root";
$password = "Qazqaz12#"; // Use your DB password
$database = "addwise";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
