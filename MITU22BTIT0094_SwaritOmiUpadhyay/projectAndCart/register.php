<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Function to sanitize input
function test_input($data) {
    $data = trim($data); // Remove whitespace from the beginning and end
    $data = stripslashes($data); // Remove backslashes
    $data = htmlspecialchars($data); // Convert special characters to HTML entities
    return $data;
}

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST['username']); // Sanitize the username
    $pass = test_input($_POST['password']); // Sanitize the password
    $email = test_input($_POST['email']); // Sanitize the email
    
    // Connection details
    $servername = "localhost";
    $user_name = "swarit";
    $password = "Admin@123";
    $dbname = "osBlog";

    // Create connection
    $conn = new mysqli($servername, $user_name, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the username already exists
    $stmt = $conn->prepare("SELECT * FROM usr_tbl WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>alert('Username already exists. Please choose a different username.');</script>";
    } else {
        // Check if the email already exists
        $stmt = $conn->prepare("SELECT * FROM usr_tbl WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "<script>alert('An account under this email already exists. Please use a different email.');</script>";
        } else {
            // Username and email do not exist, proceed with registration
            $stmt = $conn->prepare("INSERT INTO usr_tbl (username, password, email) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $pass, $email);

            if ($stmt->execute()) {
                header("Location: index.php?username=$username");
                exit;
            } else {
                echo "Error: " . $stmt->error;
            }
        }
    }

    $stmt->close();
    $conn->close();
}
?>

<div class="login-form-container">
    <h2>Register</h2>
    <form id="registrationForm" method="post">
        <input type="text" id="username" name="username" placeholder="Username" required minlength="3">
        <input type="password" id="password" name="password" placeholder="Password" required minlength="8">
        <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required minlength="8">
        <input type="text" id="email" name="email" placeholder="Email" required>
        <button type="submit">Register</button>
    </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var username = document.getElementById('username');
    var password = document.getElementById('password');
    var confirmPassword = document.getElementById('confirmPassword');
    var email = document.getElementById('email');

    var validUsername = false;
    username.addEventListener('input', onUsernameInput);

    function onUsernameInput(event) {
        validUsername = event.target.value.length > 5;
        username.style.borderColor = validUsername ? 'green': 'red';
        checkValidity();
    }

    var validPass = false;
    password.addEventListener('input', onPassInput);

    function onPassInput(event) {
        validPass = event.target.value.length > 5; 
        password.style.borderColor = validPass ? 'green': 'red';
    }

    var validConfirmPass = false;
    confirmPassword.addEventListener('input', onConfirmPassInput);

    function onConfirmPassInput(event) {
        validConfirmPass = event.target.value === password.value;
        confirmPassword.style.borderColor = validConfirmPass ? 'green': 'red';
    }

    var validEmail = false;
    email.addEventListener('input', onEmailInput);

    function onEmailInput(event) {
        var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        validEmail = emailRegex.test(event.target.value);
        email.style.borderColor = validEmail ? 'green': 'red';
        checkValidity();
    }

    function checkValidity() {
        var isValid = validUsername && validPass && validConfirmPass && validEmail;
        document.getElementById('registrationForm').querySelector('button[type="submit"]').disabled = !isValid;
    }
});
</script>
</body>
</html>

