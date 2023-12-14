<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yourlastname_sis"; // Change "yourlastname" to your actual last name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
