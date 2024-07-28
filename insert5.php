<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS tablesnew";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

// Select database
$conn->select_db("tablesnew");

// Create table
$sql = "CREATE TABLE IF NOT EXISTS tablesnew (
    id INT AUTO_INCREMENT PRIMARY KEY,
    table INT NOT NULL,
    status ENUM('Available', 'Occupied') DEFAULT 'Available'
)";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();
?>
