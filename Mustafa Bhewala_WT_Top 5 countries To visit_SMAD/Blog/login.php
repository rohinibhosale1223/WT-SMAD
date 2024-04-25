<?php
// Include the connection script
require("connection.php");

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username, email, and password from form
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // SQL query to check if username and password match
    $query = "SELECT * FROM login WHERE login_username='$username' AND login_email='$email' AND login_password='$password' ";
    $result = mysqli_query($conn, $query);
    
    // Check if query returned any rows
    if (mysqli_num_rows($result) > 0) {
        // Authentication successful, redirect to homepage
        header("Location: index.php");
        exit;
    } else {
        // Authentication failed, display error message
        $error_message = "Invalid username or password.";
    }
}
?>
<html>
<head>
    <title>Login Page</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 20px;
            background-color: #f2f2f2;
            color: #333;
            text-align: center;
        }

        h1 {
            color: #3498db;
        }

        .login-container {
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            border: 2px solid #3498db;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin: 10px 0;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        button {
            padding: 12px 20px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2c3e50;
        }
    </style>
</head>

<body>

<h1>Login</h1>
    <div class="login-container">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <a href="index.php">Login</a><!-- Changed from onclick to type="submit" -->
        </form>
        <?php
        // Display error message if authentication failed
        if (isset($error_message)) {
            echo '<p style="color: red;">' . $error_message . '</p>';
        }
        ?>
        <p>New User? <a href="register.php">Register</a></p>
    </div>

</body>

</html>
