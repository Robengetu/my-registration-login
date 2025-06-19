<?php
$host = "localhost";      // MySQL host
$user = "root";           // Default username in XAMPP
$pass = "";               // Default password (empty)
$db   = "user_db";        // Your database name

$conn = new mysqli("localhost:3307", "root", "", "user_db");


// Check the connection
if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}
?>
