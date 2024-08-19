<?php
session_start();
include("connection.php");

// Get the booking ID from the form
$booking_id = $_POST['booking_id'];

// Sanitize the booking ID to prevent SQL injection attacks
$booking_id = mysqli_real_escape_string($conn, $booking_id);

// Update the booking to mark it as cancelled
$sql = "UPDATE bookings SET cancelled=1 WHERE id=$booking_id";
$result = mysqli_query($conn, $sql);
if (!$result) {
  printf("Error: %s\n", mysqli_error($conn));
  exit();
}

// Redirect the user back to the booking details page
header("Location: ticket.php?booking_id=$booking_id");
exit();
?>
