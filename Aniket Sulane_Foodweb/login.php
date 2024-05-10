<?php
include 'connection.php'; // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // SQL query to check if the provided credentials exist in the 'Login' table
    $sql = "SELECT * FROM Login WHERE username = '$username' AND password_login = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Valid credentials, redirect to a success page or perform other actions
        echo "Login successful!";
        // Redirect to another page upon successful login
        // header("Location: dashboard.php");
    } else {
        // Invalid credentials, display an error message or redirect to login page
        echo "Invalid username or password.";
    }
}

$conn->close(); // Close the database connection
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

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
        <?php
        // Display error message if authentication failed
        if (isset($error_message)) {
            echo '<p style="color: red;">' . $error_message . '</p>';
        }
        ?>
    </div>

</body>

</html>