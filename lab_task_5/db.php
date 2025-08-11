<?php
$host = "localhost"; // Hostname (localhost = your own PC/server)
$user = "root"; // Default XAMPP MySQL username
$pass = "8135"; // Default XAMPP MySQL password (empty by default)
$db = "web_db"; // Name of your database
 
$conn = new mysqli($host, $user, $pass, $db); // Connect to MySQL using OOP

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // Stop if connection fails
}
?>