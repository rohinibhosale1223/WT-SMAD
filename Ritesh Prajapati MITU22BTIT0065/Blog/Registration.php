

<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <style>
            body{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 10;
            background-image: url(imglogin.png);
            background-size: cover; 
            background-position: center;
        
            }
            form{
            text-align: center;
            width: 300px;
            padding: 20px;
            border: 2px solid #252222;
            border-radius: 20px;
            background-color: rgba(102, 207, 230, 0.5);

            }
            h1{
                color: black;
            }
            label{
                display: block;
                text-align: left;
                margin-top: 10px;
                color: black;
            }
            input,select{
                width: calc(100% - 16px);
                padding: 8px;
                margin-top: 5px;
                margin-bottom: 10px;
                box-sizing: border-box;
                border: 1px solid #d9d9d9;
                border-radius: 4px;
            }
            button{
                width: 100%;
                padding: 10px;
                background-color:rgb(255, 253, 253);
                color: rgb(0, 0, 0);
                border-radius: 4px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }
            button:hover{
                background-color: green;
            }
        </style>
    </head>
<body>
    
<?php  //whenever user clicks on submit button then form data sent by post method- here, If the REQUEST_METHOD is POST,
//then the form has been submitted - and it should be validated. If it has not been submitted, skip the if condition and display a blank form.
if ($_SERVER["REQUEST_METHOD"] == "POST") { //if condition includes- validation and checks loing credentials with DB data.
$firstname = test_input($_POST['firstname']);
$lastname = test_input($_POST['lastname']);
$username = test_input($_POST['username']);
$pass = test_input($_POST['pass']);

//Database Connection code
// $servername = "localhost";
// $user_name = "rohini";
// $password = "WTProject@2024";
// $dbname = "test_db";

$servername = "localhost";
$user_name = "Ritesh";
$password = "Rit@esh123p";
$dbname = "registrationinfo";
// Create connection
$conn = new mysqli($servername, $user_name, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "";

$sql = "INSERT INTO info (first_name, last_name, username, password) VALUES ('".$firstname."', '".$lastname."', '".$username."', '".$pass."')";

if ($conn->query($sql) === TRUE) {
  //echo "";
  header("Location: Login.php");
        exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

function test_input($data) {
  $data = trim($data); //removes blank spaces
  $data = stripslashes($data); //
  $data = htmlspecialchars($data); //
  return $data;
}
?>


    <form action="Registration.php" method="post">
    <h1>Registration</h1>
    <label for="Firstname">Firstname:</label>
    <input type="text" id="Firstname" name="firstname" required>
    <label for="Lastname">Lastname:</label>
    <input type="text" id="Lastname" name="lastname" required><br>
    <label for="username">Username:</label>
        <input type="username" id="username" name="username" required><br>
    <label for="password">Password:</label>
        <input type="password" id="password" name="pass" required><br>

        <input type="submit" id="submit-btn" value="Register" >
        </form>
</body>
</html>
