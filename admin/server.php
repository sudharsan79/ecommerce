<?php
define('base_url', 'http://localhost/Ecommerce/');


$servername = "localhost";
$username = "root";
$password = "";
$db = "nalvazhi_products";

// Create connection

$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>