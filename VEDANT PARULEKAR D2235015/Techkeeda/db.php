<?php
$servername = "localhost";
$username = "vedant";
$password = "vedant@2003";
$dbname = "auth_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
    echo "connection success";
}
?>