<?php
$servername = "localhost";
$username = "u188140722_dentist";
$password = "Admin@123";
$dbname = "u188140722_dentist";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>
