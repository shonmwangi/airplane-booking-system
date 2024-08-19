<?php
// Start a session
session_start();
include ("connection.php");

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit();
}

// Check if the flight id was passed through GET
if (!isset($_GET['id'])) {
  header("Location: search.php");
  exit();
}

// Get the flight id
$flight_id = $_GET['id'];

// Connect to the database

// Prepare the query
$query = "SELECT * FROM flights WHERE id = $flight_id";

// Execute the query
$result = mysqli_query($conn, $query);

// Check if the query returned a row
if (mysqli_num_rows($result) != 1) {
  header("Location: search.php");
  exit();
}

// Get the flight details
$row = mysqli_fetch_assoc($result);
$origin = $row['origin'];
$destination = $row['destination'];
$departure_time = $row['departure_time'];
$arrival_time = $row['arrival_time'];
$price = $row['price'];

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html> 
  <head>	
    <title>Flight Details</title>
  </head>
  <body>
    <h1>Flight Details</h1>
    <table>
      <tr>
        <td>Origin:</td>
        <td><?php echo $origin; ?></td>
      </tr>
      <tr>
        <td>Destination:</td>
        <td><?php echo $destination; ?></td>
      </tr>
      <tr>
        <td>Departure Time:</td>
        <td><?php echo $departure_time; ?></td>
      </tr>
      <tr>
        <td>Arrival Time:</td>
        <td><?php echo $arrival_time; ?></td>
      </tr>
      <tr>
        <td>Price:</td>
        <td><?php echo $price; ?></td>
      </tr>
    </table>
    <form method="post" action="confirmation.php">
      <input type="hidden" name="flight_id" value="<?php echo $flight_id; ?>">
      <input type="submit" value="Confirm Booking">
    </form>
  </body>
</html>
