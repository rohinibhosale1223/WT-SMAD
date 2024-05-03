<?php
$servername = "localhost";
$username = "sai";
$password = "sai";
$dbname = "sai";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error)
{
    echo "failed";
}
else{
    echo "Connection Successfull";
}
?>