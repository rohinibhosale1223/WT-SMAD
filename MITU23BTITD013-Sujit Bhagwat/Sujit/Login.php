<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-image: url("88.jpeg"); 
        background-size: cover;
        background-position: center;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    
    .login-container {
        background-color: rgba(255, 255, 255, 0.8); 
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        max-width: 350px;
        width: 100%;
    }
    
    .login-container h2 {
        margin-bottom: 20px;
        color: #333;
    }
    
    .login-container input[type="text"],
    .login-container input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }
    
    .login-container input[type="submit"] {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    
    .login-container input[type="submit"]:hover {
        background-color: #0056b3;
    }
    
    .signup-link {
        margin-top: 15px;
        font-size: 14px;
        color: #555;
        cursor: pointer; /* Add cursor pointer */
        text-decoration: underline; /* Add underline */
    }
</style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <form action="index.php" method="post">
        <input type="text" name="username" placeholder="Username" required id="username">
        <br>
        <input type="password" name="password" placeholder="Password" required id="password">
        <br>
        <input type="submit" value="Login">
    </form>
    <div class="signup-link" onclick="redirectToSignup()">Don't have an account? Sign up</div>
</div>

<script>
    function redirectToSignup() {
        window.location.href = "signup.php";
    }
</script>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $servername = "localhost";
    $username = "sujit";
    $password = "sujit123";
    $dbname = "sujit";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO login_details (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $user, $pass);

    // Set parameters and execute
    if ($stmt->execute() === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>



</body>
</html>
