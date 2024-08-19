<?php
session_start();
include("connection.php");

// If the signup form is submitted
if(isset($_POST['submit'])) {
  
  // Get the form data
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  // Prepare the SQL query to check if the username is taken
  $sql = "SELECT * FROM admin WHERE username='$username'";
  
  // Execute the query
  $result = mysqli_query($conn, $sql);
  
  // Check if the query returned any results
  if(mysqli_num_rows($result) > 0) {
    // If the username is taken, show an error message
    $error = "Username already taken.";
  } else {
    // If the username is available, insert the new admin record
    $sql = "INSERT INTO admin (username, email, password) VALUES ('$username', '$email', '$password')";
    mysqli_query($conn, $sql);
    
    // Log in the new admin and redirect to the dashboard
    $admin_id = mysqli_insert_id($conn);
    $_SESSION['admin_id'] = $admin_id;
    $_SESSION['admin_username'] = $username;
    $_SESSION['admin_email'] = $email;
    header("Location: Admin.php");
  }
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Admin Signup</title>
  </head>
  <!DOCTYPE html>
<html>
  <head>
    <title>Admin Login</title>
    <style>
      body {
        background-color: #f1f1f1;
        font-family: Arial, sans-serif;
      }
      h1 {
        text-align: center;
        margin-top: 50px;
      }
      form {
        width: 300px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 0px 10px #ccc;
      }
      label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
      }
      input[type="text"],
      input[type="password"] {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: none;
        margin-bottom: 20px;
        box-sizing: border-box;
      }
      input[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 10px;
        cursor: pointer;
      }
      input[type="submit"]:hover {
        background-color: #3e8e41;
      }
      p.error {
        color: red;
        margin-top: 20px;
      }
      #hero {
  background: url("hero-img.png") center center/cover no-repeat fixed;
  height: 100vh;
}
.logo {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100px;
            }
    </style>
  </head>
  <body>
  <section id="hero" style="background-image: url('hero-img.png');">
    <div class="logo">
      <img src="Airpotlogo.JPG">
    </div>
    <div class="card mt-5">
      <div class="card-header bg-primary text-white">
        <h1 class="text-center">Plane Ticket Booking System</h1>
      </div>
  <h1>Admin Signup</h1>
    <?php if(isset($error)) { echo "<p>$error</p>"; } ?>
    <form action="Admin_signup.php" method="post">
      <label>Username:</label>
      <input type="text" name="username">
      <label>Email:</label>
      <input type="text" name="email">
      <label>Password:</label>
      <input type="password" name="password">
      <input type="submit" name="submit" value="Signup">
    </form>
    </body>
  </section>
  
</html>
