<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";

// Connect to the databases
$conn_reservation = new mysqli($servername, $username, $password, "reservationnew");
$conn_orders = new mysqli($servername, $username, $password, "ordersnew");
$conn_payments = new mysqli($servername, $username, $password, "paymentsnew");

// Check connections
if ($conn_reservation->connect_error || $conn_orders->connect_error || $conn_payments->connect_error) {
    die("Connection failed: " . $conn_reservation->connect_error . " " . $conn_orders->connect_error . " " . $conn_payments->connect_error);
}

// Fetch data from reservationnew table
$csvContent = "Reservations\n";
$csvContent .= "ID,First Name,Last Name,Guests,Email,Phone,Date,Time,Table,Special Occasion\n";
$sql_reservation = "SELECT * FROM reservationnew";
$result_reservation = $conn_reservation->query($sql_reservation);
while ($row = $result_reservation->fetch_assoc()) {
    $csvContent .= implode(",", $row) . "\n";
}

// Fetch data from ordersnew table
$csvContent .= "\nOrders\n";
$csvContent .= "Reservation ID,Order ID,Table,Item Ordered,Quantity,Amount,Total Amount\n";
$sql_orders = "SELECT * FROM ordersnew";
$result_orders = $conn_orders->query($sql_orders);
while ($row = $result_orders->fetch_assoc()) {
    $csvContent .= implode(",", $row) . "\n";
}

// Fetch data from paymentsnew table
$csvContent .= "\nPayments\n";
$csvContent .= "Reservation ID,Table,Grand Total Amount,Payment Method\n";
$sql_payments = "SELECT * FROM paymentsnew";
$result_payments = $conn_payments->query($sql_payments);
while ($row = $result_payments->fetch_assoc()) {
    $csvContent .= implode(",", $row) . "\n";
}

// Set headers for file download
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="report.csv"');

// Output CSV content
echo $csvContent;

// Close connections
$conn_reservation->close();
$conn_orders->close();
$conn_payments->close();
?>
