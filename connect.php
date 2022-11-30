<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "pdf_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
$conn ->set_charset('utf8mb4');
session_start();

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>