<?php
session_start();
include("connection.php");

// If the login form is submitted
if(isset($_POST['submit'])) {
  
  // Get the username and password from the form
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  // Prepare the SQL query
  $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
  
  // Execute the query
  $result = mysqli_query($conn, $sql);
  
  // Check if the query returned any results
  if(mysqli_num_rows($result) == 1) {
    // If the user is found, log them in
    $row = mysqli_fetch_assoc($result);
    $_SESSION['admin_id'] = $row['id'];
    $_SESSION['admin_username'] = $row['username'];
    $_SESSION['admin_email'] = $row['email'];
    header("Location: admin_dashboard.php");
  } else {
    // If the user is not found, show an error message
    $error = "Invalid login credentials.";
  }
}

// Close the database connection
mysqli_close($conn);
?>
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
</div>
    <h1>Admin Login</h1>
    <?php if(isset($error)) { echo "<p class='error'>$error</p>"; } ?>
    <form action="Admin.php" method="post">
      <label>Username:</label>
      <input type="text" name="username">
      <label>Password:</label>
      <input type="password" name="password">
      <input type="submit" name="submit" value="Login"> <br>
      <a href="Admin_signup.php">Click to signup</a> <br>
    </form>
  </section>
  </body>
</html> 