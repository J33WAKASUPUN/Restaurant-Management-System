<?php
// Database connection details
$host = 'localhost';
$user = 'root';
$password = '';
$savenew_db = 'savenew';

// Create a connection
$conn = new mysqli($host, $user, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the savenew database if it doesn't exist
$conn->query("CREATE DATABASE IF NOT EXISTS $savenew_db");

// Function to copy table data
function copyTable($conn, $source_db, $table_name, $target_db) {
    // Create table in the target database if it doesn't exist
    $conn->query("CREATE TABLE IF NOT EXISTS $target_db.$table_name LIKE $source_db.$table_name");

    // Determine the correct primary key column name
    switch ($table_name) {
        case 'reservationnew':
            $pk_column = 'id';
            break;
        case 'ordersnew':
        case 'paymentsnew':
            $pk_column = 'reservation_id';
            break;
        default:
            $pk_column = 'id'; // Default to 'id' if table name is unknown
    }

    // Use INSERT ... ON DUPLICATE KEY UPDATE to handle duplicates
    $conn->query("INSERT INTO $target_db.$table_name SELECT * FROM $source_db.$table_name ON DUPLICATE KEY UPDATE $pk_column=VALUES($pk_column)");
}

// Copy reservationnew table
copyTable($conn, 'reservationnew', 'reservationnew', $savenew_db);

// Copy ordersnew table
copyTable($conn, 'ordersnew', 'ordersnew', $savenew_db);

// Copy paymentsnew table
copyTable($conn, 'paymentsnew', 'paymentsnew', $savenew_db);

echo '<script>alert("Data saved successfully!")</script>';

?>
<script>
    window.location.href = "payments.php";
</script>