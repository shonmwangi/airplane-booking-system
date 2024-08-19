<?php
// Start the session
session_start();
  include("connection.php");


// Check if the user is logged in
if (!isset($_SESSION['username'])) {
  // Redirect to the login page if the user is not logged in
  header("Location: login.php");
  exit();
}



// Get the flight ID from the URL
if(isset($_GET['id'])) {
    $flight_id = $_GET['id'];
    // rest of your code here
} else {
    echo "No flight ID specified.";
}

// Retrieve the flight details from the database
$sql = "SELECT * FROM flights WHERE flight_id = '$flight_id'";
$result = mysqli_query($conn, $sql);

// Check if the flight exists
if (mysqli_num_rows($result) == 0) {
  // Redirect to the dashboard if the flight does not exist
  header("Location: dashboard.php");
  exit();
}

// Fetch the flight details
$row = mysqli_fetch_assoc($result);

// Display the flight details
echo "<h2>Flight Details:</h2>";
echo "<table>";
echo "<tr><td>Flight Number:</td><td>" . $row['flight_number'] . "</td></tr>";
echo "<tr><td>Departure City:</td><td>" . $row['departure_city'] . "</td></tr>";
echo "<tr><td>Arrival City:</td><td>" . $row['arrival_city'] . "</td></tr>";
echo "<tr><td>Departure Date:</td><td>" . $row['departure_date'] . "</td></tr>";
echo "<tr><td>Arrival Date:</td><td>" . $row['arrival_date'] . "</td></tr>";
echo "<tr><td>Price:</td><td>" . $row['price'] . "</td></tr>";
echo "</table>";

// Close the database connection
mysqli_close($conn);
?>
