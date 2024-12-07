<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['firstName'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit();
}

// Database configuration
$servername = "localhost"; // Usually 'localhost', but it might be different for your setup
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "hmcleansql"; // Your specified database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the booking ID from the URL
$bookingId = $_GET['id'];

// Delete the booking
$sql = "DELETE FROM bookings WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $bookingId);
$stmt->execute();

// Close the statement
$stmt->close();

// Close the connection
$conn->close();

// Redirect to the transaction page
header("Location: transaction.php");
exit();
?>