<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gaming Page Signup</title>
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
    .signup-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        animation: fadeIn 0.5s ease-in-out;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(-20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .signup-container h2 {
        margin-bottom: 20px;
        color: #333;
        font-size: 24px;
    }
    
    .signup-container input[type="text"],
    .signup-container input[type="password"],
    .signup-container input[type="tel"],
    .signup-container input[type="date"],
    .signup-container select {
        width: calc(100% - 22px);
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        transition: border-color 0.3s ease;
    }

    .signup-container input[type="text"]:focus,
    .signup-container input[type="password"]:focus,
    .signup-container input[type="tel"]:focus,
    .signup-container input[type="date"]:focus,
    .signup-container select:focus {
        border-color: #007bff;
    }
    
    .signup-container input[type="submit"] {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    
    .signup-container input[type="submit"]:hover {
        background-color: #0056b3;
    }
    
    .login-link {
        margin-top: 15px;
        font-size: 14px;
        color: #555;
        text-decoration: none;
        display: block;
        transition: color 0.3s ease;
    }

    .login-link:hover {
        color: #007bff;
    }
</style>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = test_input($_POST['username']);
    $pass = test_input($_POST['password']);
    $phone = test_input($_POST['phone']);
    $dob = test_input($_POST['dob']);
    $gender = test_input($_POST['gender']);

    $servername = "localhost";
    $user_name = "sujit";
    $password = "sujit123";
    $dbname = "sujit";

    $conn = new mysqli($servername, $user_name, $password, $dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO sign_updetails (username, password, phone, dob, gender) VALUES ('$user', '$pass', '$phone', '$dob', '$gender')";

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?> 


<div class="signup-container">
    <h2>Sign Up</h2>
    <form id="signup-form" action="login.php" method="post" onsubmit="return validateForm()">
        <input type="text" id="username" name="username" placeholder="Username" required>
        <br>
        <input type="tel" id="phone" name="phone" placeholder="Phone Number" pattern="[0-9]{10}" required>
        <br>
        <input type="password" id="password" name="password" placeholder="Password" required>
        <br>
        <input type="date" id="dob" name="dob" required>
        <br>
        <select id="gender" name="gender" required>
            <option value="">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
        <br>
        <input type="submit" value="Sign Up">
    </form>
    <a href="login.php" class="login-link">Already have an account? Log in</a>
</div>

<script>
    function validateForm() {
        var username = document.getElementById("username").value;
        var phone = document.getElementById("phone").value;
        var password = document.getElementById("password").value;
        var dob = document.getElementById("dob").value;
        var gender = document.getElementById("gender").value;

        if (username === "" || phone === "" || password === "" || dob === "" || gender === "") {
            alert("All fields are required");
            return false;
        }

        return true;
    }
</script>

</body>
</html>
