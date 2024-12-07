<?php
session_start();

// Check if booking information exists in session
if (!isset($_SESSION['booking'])) {
    header("Location: booknow.php");
    exit();
}

$booking = $_SESSION['booking'];

// Handle edit request
if (isset($_POST['edit'])) {
    // Redirect back to booking form with data
    header("Location: booknow.php?edit=1");
    exit();
}

// Handle delete request
if (isset($_POST['delete'])) {
    // Clear booking data from session
    unset($_SESSION['booking']);
    header("Location: booknow.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Summary</title>
    <!-- Add your CSS links here -->
</head>
<body>
    <h1>Order Summary</h1>
    <div class="summary-container">
        <p><strong>Service Date:</strong> <?php echo htmlspecialchars($booking['serviceDate']); ?></p>
        <p><strong>Service Time:</strong> <?php echo htmlspecialchars($booking['serviceTime']); ?></p>
        <p><strong>Area Size:</strong> <?php echo htmlspecialchars($booking['areaSize']); ?> sqm</p>
        <p><strong>Selected Services:</strong></p>
        <ul>
            <?php foreach ($booking['services'] as $service): ?>
                <li><?php echo htmlspecialchars($service); ?></li>
            <?php endforeach; ?>
        </ul>
        <p><strong>Total Price:</strong> ₱<?php echo number_format($booking['totalPrice'], 2); ?></p>
    </div>

    <form action="" method="post">
        <button type="submit" name="edit">Edit Booking</button>
        <button type="submit" name="delete" onclick="return confirm('Are you sure you want to delete this booking?');">Delete Booking</button>
    </form>

    <a href="confirm_booking.php">Confirm Booking</a>
</body>
</html>