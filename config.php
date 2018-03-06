<?php 
$servername = "208.91.198.197:3306";
$username = "BalajiNandha";
$password = "@Itengineer007";
$dbname = "farmingarms";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) 
  {
      die("Connection failed: " . $conn->connect_error);
  }
  ?>