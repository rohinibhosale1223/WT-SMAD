<?php
// Include the connection script
require("connection.php");

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from form
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    // Prepare SQL query to check if username already exists
    $query = "SELECT * FROM login WHERE login_username = ?";
    $stmt = mysqli_prepare($conn, $query);

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "s", $username);

    // Execute the statement
    mysqli_stmt_execute($stmt);

    // Store the result
    $result = mysqli_stmt_get_result($stmt);

    // Check if username already exists
    if (mysqli_num_rows($result) > 0) {
        // Username already exists, display error message
        $error_message = "Username already exists. Please choose a different username.";
    } else {
        // Username doesn't exist, insert new user into database
        $insert_query = "INSERT INTO login (login_username, login_password, login_email) VALUES (?, ?, ?)";
        $insert_stmt = mysqli_prepare($conn, $insert_query);

        // Bind parameters
        mysqli_stmt_bind_param($insert_stmt, "sss", $username, $password, $email);

        // Execute the insert statement
        mysqli_stmt_execute($insert_stmt);

        // Redirect to login page
        header("Location: login.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <style>
        /* Your default styling */
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

        .registration-container {
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
<h1>Register</h1>
    <div class="register-container">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Register</button>
        </form>
        <?php
        // Display error message if username already exists
        if (isset($error_message)) {
            echo '<p style="color: red;">' . $error_message . '</p>';
        }
        ?>
    </div>
    </form>
</body>
</html>