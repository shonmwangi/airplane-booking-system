<?php

$dbhost = "localhost";
$dBuser = "root";
$dBpass = "";
$dBname = "ticket102";
 
$conn = mysqli_connect($dbhost, $dBuser,$dBpass,$dBname);

if (!$conn) {
    die("connection failed:" . mysqli_connect_error());
}