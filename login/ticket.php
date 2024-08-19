<!DOCTYPE html>
<html>
<head>
  <title>Flight Booking</title>
  <style>
    body {
      background-color: lightblue;
    }
    .ticket-details {
      width: 50%;
      margin: 0 auto;
      text-align: center;
      background-color: white;
      padding: 20px;
      border-radius: 10px;
    }
  </style>
</head>
<body>
  <?php
  session_start();
  include("connection.php");

  // Get the booking ID from the URL parameter
  $booking_id = $_GET['booking_id'];

  // Sanitize the booking ID to prevent SQL injection attacks
  $booking_id = mysqli_real_escape_string($conn, $booking_id);

  // Fetch the booking and flight details
  $sql = "SELECT bookings.id AS booking_id, flights.flight_number, flights.departure_city, flights.arrival_city, flights.departure_date, flights.arrival_date, flights.price, bookings.name, bookings.email
          FROM bookings
          INNER JOIN flights
          ON bookings.flight_id = flights.id
          WHERE bookings.id = $booking_id";
  $result = mysqli_query($conn, $sql);
  if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
  if (mysqli_num_rows($result) > 0) {
    // Display the booking details
    $row = mysqli_fetch_assoc($result);
    echo "<div class='ticket-details'>";
    echo "<h2>Booking Details:</h2>";
    echo "<p><strong>Booking ID:</strong> " . $row["booking_id"] . "</p>";
    echo "<p><strong>Flight Number:</strong> " . $row["flight_number"] . "</p>";
    echo "<p><strong>Departure City:</strong> " . $row["departure_city"] . "</p>";
    echo "<p><strong>Arrival City:</strong> " . $row["arrival_city"] . "</p>";
    echo "<p><strong>Departure Date:</strong> " . $row["departure_date"] . "</p>";
    echo "<p><strong>Arrival Date:</strong> " . $row["arrival_date"] . "</p>";
    echo "<p><strong>Price:</strong> $" . $row["price"] . "</p>";
    echo "<p><strong>Name:</strong> " . $row["name"] . "</p>";
    echo "<p><strong>Email:</strong> " . $row["email"] . "</p>";
    echo "<p><a href='download.php?booking_id=" . $row["booking_id"] . "'>Download Ticket</a></p>";
    echo "</div>";
  } else {
    echo "Booking not found.";
  }
  // Fetch the booking and flight details
$sql = "SELECT bookings.id AS booking_id, flights.flight_number, flights.departure_city, flights.arrival_city, flights.departure_date, flights.arrival_date, flights.price, bookings.name, bookings.email, bookings.cancelled
        FROM bookings
        INNER JOIN flights
        ON bookings.flight_id = flights.id
        WHERE bookings.id = $booking_id";
$result = mysqli_query($conn, $sql);
if (!$result) {
  printf("Error: %s\n", mysqli_error($conn));
  exit();
}
if (mysqli_num_rows($result) > 0) {
  // Display the booking details
  $row = mysqli_fetch_assoc($result);
  if ($row["cancelled"] == 1) {
    echo "<p>Your booking has been cancelled.</p>";
  } else {
    echo "<h2>Booking Details:</h2>";
    // display the booking details
  }
} else {
  echo "Booking not found.";
}

  // Close database connection
  mysqli_close($conn);
  ?>
</body>
<form method="post" action="cancel_booking.php">
  <input type="hidden" name="booking_id" value="<?php echo $booking_id; ?>">
  <button type="submit" name="cancel_booking">Cancel Booking</button>
</form>
</html>
