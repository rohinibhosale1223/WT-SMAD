<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="styles2.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('https://getwallpapers.com/wallpaper/full/1/2/a/1079982-superbike-wallpaper-1920x1164-for-hd-1080p.jpg'); /* Add your background image path here */
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            color: #fff;
        }
        .container {
            width: 100%;
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black background */
            border-radius: 10px;
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="password"],
        input[type="tel"],
        input[type="email"],
        select {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
        }
        button {
            width: calc(100% - 20px);
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        p {
            margin-top: 20px;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $email = test_input($_POST['email']);
        $username = test_input($_POST['username']);
        $password = test_input($_POST['password']);
        $mobile = test_input($_POST['mobile']);

        $servername = 'localhost';
        $user_name = 'abhi';
        $passwd = '123456789';
        $dbname = 'revvedriders';
        $conn = new mysqli ($servername, $user_name, $passwd, $dbname);
        
        // Check connection
        if($conn->connect_error)
        {
            die("Connection failed: " .$conn->connect_error);
        }

        echo "Connection Successful";

        $stmt = $conn->prepare("INSERT INTO login (email, username, password, mobile) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $email, $username, $password, $mobile);

        if ($stmt->execute())
        {
            echo "Record inserted successfully.";
            // Redirect to another page after successful insert
            header("Location: https://localhost/abhi/index1.php?username=$username");
            exit;
        }
        else
        {
            echo "Error: " .$stmt->error;
        }
        $stmt->close();
        $conn->close();
    }

    function test_input($data)
    {
        $data=trim($data);//remove blank spaces
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
?>



    <div class="container">
        <h2>Sign Up</h2>
        <form method="post" onsubmit="return validateForm()">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <label for="mobile">Mobile No:</label>
            <input type="tel" id="mobile" name="mobile" pattern="[0-9]{10}" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="">Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            <button type="submit">Sign Up</button>
        </form>
        <p>Already have an account? <a href="loginbike.php">Login here</a>.</p>
    </div>

    <script>
        function validateForm() {
            var mobileRegex = /^[0-9]{10}$/;
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            var mobileInput = document.getElementById('mobile').value;
            var emailInput = document.getElementById('email').value;

            if (!mobileRegex.test(mobileInput)) {
                alert("Please enter a valid 10-digit mobile number.");
                return false;
            }

            if (!emailRegex.test(emailInput)) {
                alert("Please enter a valid email address.");
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
