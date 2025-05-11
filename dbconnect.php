<?php
//echo "hello";
  // Connect to the database
  $host = "localhost";
  $user = "root";
  $password = "";
  $dbname = "ntddb";

  $conn = mysqli_connect($host, $user, $password, $dbname);

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>
