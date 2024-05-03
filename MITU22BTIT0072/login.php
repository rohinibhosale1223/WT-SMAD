<?php
// Include the connection.php file to establish a database connection
include 'connection.php';

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the values from the login form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to check if the username and password exist in the login table
    $sql = "SELECT * FROM login WHERE username='$username' AND password_sai='$password'";
    $result = $conn->query($sql);

    // Check if the query returned any rows
    if ($result->num_rows > 0) {
        // Login successful, redirect to a success page
        header("Location: index.html");
        exit();
    } else {
        // Login failed, redirect back to the login page with an error message
        header("Location: login.php?error=Invalid username or password");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>GeeksforGeeks Registration</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="main">
        <h1>Fanta</h1>
        <form action="login.php" method="post"> <!-- Modified action attribute -->
            <label for="first">
                Username:
            </label>
            <input type="text" id="first" name="username" placeholder="Enter your Username" required> <!-- Modified name attribute -->

            <label for="password">
                Password:
            </label>
            <input type="password" id="password" name="password" placeholder="Enter your Password" required> <!-- Modified name attribute -->

            <div class="wrap">
                <a href="index.html" style="text-decoration: none;">Submit</a>
            </div>
        </form>
        <p>Not registered? <a href="createAcc.html" style="text-decoration: none;">Create an account</a></p>
    </div>
</body>

</html>
