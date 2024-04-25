<?php
$servername = "localhost";
$username = "mustafa";
$password = "mustafa@123";
$dbname = "blog";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error)
{
    echo "Xampp Connection Failed!";
}
else{
    echo "Xampp Connection Succesfull!";
}
?>