<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
<title>Web Technoloy</title>

<!-- CSS (load bootstrap from a CDN) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css"&gt;

  <style>
    * {
      margin: 0;
      padding: 0;
    }
   
    body {
        font-family: Arial, Helvetica, sans-serif;
        background: white;
    }
   
    .container {
        width: 90%;
        margin: 0 auto;
        height: calc(100vh - 100px);
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
   
   
    form {
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 300px;
        border: 1px solid rgb(187, 187, 187);
        border-radius: 8px;
        padding: 20px;
    }
    h2 {
        text-align: center;
    }
    label {
        margin: 20px 0 6px 0;
    }
    input {
        height: 25px;
        border: 1px solid rgb(187, 187, 187);
        border-radius: 8px;
    }
    input:focus {
        outline: none;
    }
   
    input[type="submit"] {
        margin: 20px 0
    }

    #show-pass {
      width: 140px;
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
$user_name = "rohini";
$password = "WTProject@2024";
$dbname = "test_db";

// Create connection
$conn = new mysqli($servername, $user_name, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
//$sql = "SELECT * FROM user_tbl WHERE username = '".$username."' AND pass = '".$pass."'";
$sql = "SELECT * FROM usr_tbl WHERE username = '".$username."' AND pass = '".$pass."'";

//perform a query against a database using PHP mysqli query() function
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "login successful";
  echo "<script>
  localStorage.setItem('userDetails', JSON.stringify({username:'".$username."', password:'".$pass."'}));
  setTimeout(function(){window.top.location='index.php'} , 3000);
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

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php">Web Development</a>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
      </ul>
      <a href="login.php">Login</a>

      <a href="register.php">| Register</a>  
    </nav>
   
    </header>

  <div class="container">
       
    <form action="login.php" method="post">
        <h2>Login Form</h2>
        <label for="username">User Name</label>
        <input type="text" class="box" placeholder="Enter User name" id="username" name="username">
        <label for="pass">Password</label>
        <input type="password" class="box" placeholder="Enter Password" id="pass" name="pass">
        <button id="show-pass">show password</button>
        <input type="submit" id="submit-btn" value="Login" disabled>
        <!-- <div style="color: <%= err ? 'red' : 'green' %>"><%= msg %></div> -->
        <div class="msg"></div>
    </form>
</div>

<script>
    var username = document.getElementById('username');
    var pass = document.getElementById('pass');
    var submit = document.getElementById('submit-btn');
    var showPass = document.getElementById('show-pass');
    var msgElement = document.querySelector('.msg');

   

    var validUsername = false, validPass = false;

    username.addEventListener('input', onUsernameInput);
    pass.addEventListener('input', onPassInput);
    showPass.addEventListener('click', togglePass);
    //submit.addEventListener('click', onSubmitClick);

    function onUsernameInput(event) {
        // console.log(event.target.value);
        validUsername = event.target.value.length > 5;
        username.style.borderColor = validUsername ? 'green': 'red';
        checkValidity();
    }

    function onPassInput(event) {
        // console.log(event.target.value);
        validPass = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/.test(event.target.value);
        pass.style.borderColor = validPass ? 'green': 'red';
        checkValidity();
    }

    function checkValidity() {
        // console.log((validUsername && validPass));
        submit.disabled = !(validUsername && validPass);
    }

    function togglePass(event) {
      event.preventDefault();
      if(pass.getAttribute('type') === 'text') {
        pass.setAttribute('type', 'password');
        showPass.innerHTML = 'Show Password';
      } else {
        pass.setAttribute('type', 'text');
        showPass.innerHTML = 'Hide Password';
      }
     
    }
    /*function onSubmitClick(e)
    {
      e.preventDefault();
      //var msg = '';
      //let un = "rohinibhosale";
      // let pw = 'Admin@123'
      // if(un === username.value && pw === pass.value) {
      //  msg = 'Successfully loged in';
      //console.log('success');
      localStorage.setItem('userDetails', JSON.stringify({username:un, password:pw})); // stringify converts data into string and parse converts data into number
      msgElement.textContent=msg;  //don't use innerHTML for security purpose
      setTimeout(() => window.location = `${window.location.href.slice(0, window.location.href.lastIndexOf('/'))}/index.php`, 2000);  //slice=cut
    }
    else {
      msg = 'Invalid Username or Password';
      msgElement.textContent=msg;
      console.log('error');
    }

    }*/
</script>

<footer>

  <p class="text-center text-muted">&copy; Copyright 2023 The MIT People</p>
 
  </footer>


</body>
</html>