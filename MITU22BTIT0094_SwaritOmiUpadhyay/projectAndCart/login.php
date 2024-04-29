
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST['username']);
    $pass = test_input($_POST['password']);

    // Prepare and bind
    $stmt = $conn->prepare("SELECT * FROM usr_tbl WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $pass);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        echo "Redirecting..."; // Debugging statement
        header("Location: http://localhost/test/index.php?username=$username");
        die();
    } else {
        // Invalid credentials
        echo "<script>alert('Invalid username or password.');</script>";
    }
}

function test_input($data) {
    $data = trim($data); // Removes blank spaces
    $data = stripslashes($data); // Removes backslashes
    $data = htmlspecialchars($data); // Converts special characters to HTML entities
    return $data;
}
?>

<script>
$(document).ready(function() {
    var username = $('#username');
    var password = $('#password');
    var showPass = $('#show-pass');

    username.on('input', function() {
        username.css('border-color', username.val().length > 5 ? 'green' : 'red');
    });

    password.on('input', function() {
        password.css('border-color', password.val().length > 5 ? 'green' : 'red');
    });

    showPass.on('click', function(event) {
        event.preventDefault();
        if(password.attr('type') === 'password'){
            password.attr('type', 'text');
            showPass.text('Hide Password');
        } else {
            password.attr('type', 'password');
            showPass.text('Show Password');
        }
    });
    $('#loginForm').submit(function(event) {
        var usernameValue = username.val();
        var passwordValue = password.val();
        if (!(usernameValue.length > 5 && passwordValue.length > 5)) {
            alert('Please enter valid username and password.');
            event.preventDefault(); // Prevent form submission if validation fails
        }
    });
});
</script>

<div class="login-form-container">
    <h2>Login</h2>
    <form id="loginForm" method="post">
        <input type="text" id="username" name="username" placeholder="Username" required minlength="3">
        <input type="password" id="password" name="password" placeholder="Password" required minlength="8">
        <button type="button" id="show-pass" title="Show/hide password">Show Password</button>
        <button type="submit">Login</button>
    </form>
    <p>New user? <a href="register.php">Click here to register</a></p>
</div>
</body>
</html>
