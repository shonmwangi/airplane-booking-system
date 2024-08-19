<?php
session_start();
include("connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            // Password is correct, set session variables
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $row['username'];
            header("Location: dashbord.php");
            exit();
        } else {
            // Password is incorrect
            $error = "Invalid username or password.";
        }
    } else {
        // User does not exist
        $error = "Invalid username or password.";
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Plane Ticket Booking System</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #17a2b8;
            height: 100vh;
            font-family: 'Helvetica Neue', sans-serif;
            color: #fff;
            text-align: center;
        }
            #logo {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100px;
            }
        
            #logo img {
                height: 80px;
            }
        
            h1 {
                margin-top: 50px;
                font-size: 36px;
                font-weight: bold;
            }
        
            .error {
                color: #f00;
            }
        
            .form-container {
                margin-top: 50px;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                background-color: #fff;
                border-radius: 10px;
                padding: 40px;
                box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.2);
            }
        
            .form-container h2 {
                margin-bottom: 20px;
                font-size: 24px;
            }
        
            .form-group {
                display: flex;
                justify-content: center;
                align-items: center;
                margin-bottom: 20px;
                width: 100%;
            }
        
            .form-group label {
                flex: 1;
                font-size: 18px;
                text-align: right;
                margin-right: 20px;
            }
        
            .form-group input[type="text"],
            .form-group input[type="password"] {
                flex: 2;
                padding: 10px;
                font-size: 16px;
                border-radius: 5px;
                border: 1px solid #ccc;
            }
        
            .form-group input[type="submit"] {
                width: 100%;
                margin-top: 20px;
                padding: 10px;
                font-size: 18px;
                background-color: #17a2b8;
                border: none;
                color: #fff;
                cursor: pointer;
                border-radius: 5px;
            }

        
            .signup-link {
                margin-top: 20px;
                font-size: 16px;
                text-decoration: none;
                color: #17a2b8;
            }
        
            .signup-link:hover {
                text-decoration: underline;
            }
            #hero {
  background: url("hero-img.png") center center/cover no-repeat fixed;
  height: 100vh;
}
        
        </style>
        
</head>
<body>
<section id="hero" style="background-image: url('hero-img.png');">
  <div class="container">
    <div class="logo">
      <img src="Airpotlogo.JPG">
    </div>
    <div class="card mt-5">
      <div class="card-header bg-primary text-white">
        <h1 class="text-center">Plane Ticket Booking System</h1>
      </div>
      <div class="card-body">
        <?php if (isset($error)): ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $error; ?>
          </div>
        <?php endif; ?>
        <h2 class="text-center">Login</h2>
        <form method="post" action="login.php">
          <div>
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" style="width: 200px;padding: 6px 12px;" class="form-control">
        </div>
            <div> 
            <label for="password">Password:</label> <br>
            <input type="password" id="password" name="password" style="width: 200px; padding: 6px 12px;" class="form-control"> <br>
          </div>
          <button type="submit" class="btn btn-primary btn-block" style="padding: 10px 10px 10px 10px; background-color: pink; border-color: #096f80; font-size: 1.2em; padding: 10px 20px;">Login</button>

        </form>
        <div class="mt-3 text-center">
          <a href="signup.php">Click to signup</a> <br>
          
        </div>
      </div>
    </div>
  </div>
        </selection>
</body>

