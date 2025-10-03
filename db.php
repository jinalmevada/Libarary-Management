<?php
$host = "localhost";
$user = "root";
$password = ""; // Default for XAMPP/WAMP. Change if you have a password.
$database = "library_db";

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
