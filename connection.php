<?php
$servername = "localhost";
$username = "Carbonara";
$password = "";
$dbname = "crud_php";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>