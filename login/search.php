<?php
session_start();
include("connection.php");

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the form data
  $origin = $_POST['origin'];
  $destination = $_POST['destination'];
  $departure_time = $_POST['departure_time'];

  // Prepare the query
  $query = "SELECT * FROM flights WHERE origin = '$origin' AND destination = '$destination' AND departure_time >= '$departure_time'";

  // Execute the query
  $result = mysqli_query($conn, $query);

  // Check if the query returned any rows
  if (mysqli_num_rows($result) > 0) {
    // Display the search results
    echo "<h2>Search Results:</h2>";
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<p>" . $row['origin'] . " to " . $row['destination'] . " - " . $row['departure_time'] . " to " . $row['arrival_time'] . " - $" . $row['price'] . " <a href='book.php?id=" . $row['id'] . "'>Book</a></p>";
    }
  } else {
    // Display a message if no results were found
    echo "<p>No flights found.</p>";
  }

  // Close the database connection
  mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Flight Search</title>
</head>
<body>
  <h1>Flight Search</h1>
  <form method="post" action="search.php">
    <label for="origin">Origin:</label>
    <input type="text" id="origin" name="origin"><br><br>
    <label for="destination">Destination:</label>
    <input type="text" id="destination" name="destination"><br><br>
    <label for="departure_time">Departure Time:</label>
    <input type="datetime-local" id="departure_time" name="departure_time"><br><br>
    <input type="submit" value="Search">
  </form>
</body>
</html>
