<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 10;
            background-image: url(imglogin.png);
            background-size: cover; 
            background-position: center;
        }
        form {
            text-align: center;
            width: 300px;
            padding: 20px;
            border: 2px solid #252222;
            border-radius: 20px;
            background-color: rgba(102, 207, 230, 0.5);
        }   
        h1 {
            color: black;
        }
        label {
            display: block;
            text-align: left;
            margin-top: 10px;
            color: black;
        }
        input, select {
            width: calc(100% - 16px);
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: rgb(248, 248, 248);
            color: rgb(0, 0, 0);
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: green;
        }
        #registerLink {
            margin-top: 10px;
            color: blue;
            text-decoration: underline;
            cursor: pointer;
        }
    </style>
</head>
<body>


<?php  //whenever user clicks on submit button then form data sent by post method- here, If the REQUEST_METHOD is POST,
//then the form has been submitted - and it should be validated. If it has not been submitted, skip the if condition and display a blank form.
if ($_SERVER["REQUEST_METHOD"] == "POST") { //if condition includes- validation and checks login credentials with DB data.
$username = test_input($_POST['username']);
$pass = test_input($_POST['pass']);

//Database Connection code
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
echo "Connected successfully";
//$sql = "SELECT * FROM user_tbl WHERE username = '".$username."' AND pass = '".$pass."'";
$sql = "SELECT * FROM info WHERE username = '".$username."' AND password = '".$pass."'";

//perform a query against a database using PHP mysqli query() function
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "login successful";
  echo "<script>
  localStorage.setItem('userDetails', JSON.stringify({username:'".$username."', password:'".$pass."'}));
  setTimeout(function(){window.top.location='Home.php'} , 3000);
  </script>";
 // echo "<script>localStorage.setItem('un', '$username');</script>";
  //echo "<script>localStorage.setItem('ps', '$pass');</script>";
 /* echo "
 <script type=\"text/javascript\">
 setTimeout(() => window.location = `${window.location.href.slice(0, window.location.href.lastIndexOf('/'))}/index.php`, 2000);  //slice=cut
 </script>";*/
}
else{
  echo "login failed";
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

    
<form action="Login.php" method="post">
    <h1>Login</h1>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br>
    <label for="pass">Password:</label>
        <input type="password" id="pass" name="pass" required><br>

    <button id="show-pass">show password</button><br>

    <button type="submit" onclick="location.href='Home.php'" >Login</button>
    <p id="registerLink" onclick="location.href='Registration.php'">Don't have an account? Register here.</p>
    </form>
    <script>
        var username=document.getElementById('username');
        var vaildUsername=false;
        var password=document.getElementById('password');
        //var vaildPassword=false;
        var vaildPass=false;
        var showPass = document.getElementById('show-pass');
        var submit = document.getElementById('submit-btn');


        password.addEventListener('input',onPasswordInput);
        username.addEventListener('input',onUsernameInput);
        showPass.addEventListener('click', togglePass);
        submit.addEventListener('click', onSubmitClick);




        function onUsernameInput(event){
            vaildUsername=event.target.value.length>5;
            username.style.border=vaildUsername?'5px solid green':'5px solid red';
            checkValidity();
        }
        function onPasswordInput(event){
            //vaildPassword=event.target.value.length>8;
            vaildPass=/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/.test(event.target.value);
            password.style.border=vaildPass?'5px solid green':'5px solid red';
        }
        function togglePass(event) {
            event.preventDefault();
      		if(pass.getAttribute('type') === 'text'){ 

        		pass.setAttribute('type','password');
        		showPass.innerHTML='Show Password';
      		} 
            else{
        		pass.setAttribute('type','text');
        		showPass.innerHTML='Hide Password';
      		}     
    	}
        function checkValidity() {
        		submit.disabled = !(validUsername && validPass);      // not true then disabled
    	}
        function onSubmitClick(e){
      e.preventDefault();
      var msg = '';
      let un = "ritesh";
      let pw = 'Admin@123'
      if(un === username.value && pw === pass.value) {
      msg = 'Successfully logged in';
      localStorage.setItem('userDetails', JSON.stringify({username:un, password:pw}));

      }}

    </script>
</body>
</html>
