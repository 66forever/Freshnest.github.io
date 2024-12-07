php
Insert Code
Edit
Copy code
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

// Get the booking ID and updated data from the form
$bookingId = $_POST['id'];
$firstName = trim($_POST['firstName ']);
$lastName = trim($_POST['lastName']);
$serviceDate = trim($_POST['serviceDate']);
$serviceTime = trim($_POST['serviceTime']);
$areaSize = trim($_POST['areaSize']);
$totalPrice = trim($_POST['totalPrice']);

// Update the booking data
$sql = "UPDATE bookings SET first_name = ?, last_name = ?, service_date = ?, service_time = ?, area_size = ?, total_price = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssi", $firstName, $lastName, $serviceDate, $serviceTime, $areaSize, $totalPrice, $bookingId);
$stmt->execute();

// Close the statement
$stmt->close();

// Close the connection
$conn->close();

// Redirect to the transaction page
header("Location: transaction.php");
exit();
?>