<?php
$servername = "localhost";
$username = "rajput";
$password = "ani";
$dbname = "blog";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error)
{
    echo "failed";
}
else{
    echo "done";
}
?>