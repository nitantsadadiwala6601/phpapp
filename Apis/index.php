<?php
require_once realpath(__DIR__ . '/vendor/autoload.php');
$servername = "localhost";
$username = "root";
$password = "root";
$database = "php_app_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
	
echo "Connected successfully";		
?>
