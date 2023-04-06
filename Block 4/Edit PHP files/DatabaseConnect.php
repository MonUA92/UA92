<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "student106-353031336448";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
  ?>
