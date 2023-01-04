<?php
$servername = "localhost";
$username = "root1";
$password = "root1";
$db="assign1";

$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>