<html>
<head>
  <title>Flight Booking</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }
    h2 {
      color: #333333;
      font-size: 24px;
      margin-bottom: 16px;
    }
    table {
      border-collapse: collapse;
      width: 100%;
    }
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #dddddd;
    }
    th {
      background-color: #dddddd;
    }
    form {
      display: inline-block;
      margin: 0;
    }
    input[type="text"], input[type="submit"] {
      font-family: Arial, sans-serif;
      font-size: 14px;
      padding: 4px 8px;
      border: none;
      border-radius: 4px;
      background-color: #f2f2f2;
      margin-right: 8px;
    }
    input[type="submit"] {
      background-color: #4CAF50;
      color: #ffffff;
      cursor: pointer;
    }
    a {
      color: #333333;
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <?php
  session_start();
  include("connection.php");
  
  