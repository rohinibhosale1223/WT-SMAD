<!DOCTYPE html>
<html>
<head>
    <title>TurboTalks-LoginPage</title>
    <link rel="web icon" type="png" href="carlogo.jpg">
</head>
<style>
    body {
        background-image: url(p.jpg);
        background-repeat: no-repeat;
        font-family: fantasy;
        background-size: cover;
    }

    form {
        border: 2px solid black;
        width: 500px;
        height: 500px;
        text-align: center;
        margin-left: 600px;
        margin-top: 200px;
        background-color: rgba(0, 0, 0, 0.6);
    }

    h4 {
        color: white;
    }

    h3 {
        color: white;
    }

    .sign {
        color: white;
    }

    .sign:hover {
        color: #FF0000;
    }

    .username {
        width: 350px;
        height: 30px;
        border: 1px solid black;
        border-radius: 5px;
    }

    .password {
        width: 350px;
        height: 30px;
        border: 1px solid black;
        border-radius: 5px;
    }

    .new-register {
        color: white;
    }

    .new-register:hover {
        color: #FF0000;
    }

    .login {
        cursor: pointer;
        border-radius: 5px;
        width: 100px;
        border: none;
        background-color: #FF0000;
        font-family: fantasy;
        color: #fff;
        height: 50px;
    }

    .login:hover {
        background-color: #8B0000;
    }

    .showpass {
        cursor: pointer;
        border-radius: 5px;
        width: 110px;
        border: none;
        font-family: fantasy;
        background-color: #FF0000;
        color: #fff;
        height: 20px;
    }

    .showpass:hover {
        background-color: #8B0000;
    }
</style>

<body>
    <form action="home.html" id="myform" method="post">
        <h3>JOIN THE TURBOTALKS INDIA COMMUNITY</h3>
        <br>
        <h3><a href="https://accounts.google.com/v3/signin/identifier?hl=en-gb&ifkv=ASKXGp3t4IG5KeJP87H40h4aBdRScxhnTvw1Bty8N8ijI0NwG9G1Yy5CRNb7sXkJhXEybkdo8twjlw&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S252556771%3A1706118587831152&theme=glif"
                class="sign">Sign In With Google</a> </h3>
        <h3>OR</h3>
        <h4>Member Login</h4>
        <input type="text" class="username" placeholder=" Username/Email" id="username" name="username">
        <br> <br>
        <input type="password" placeholder=" Password" class="password" id="password" name="password">
        <br> <br>
        <button id="show-pass" class="showpass">Show Password</button>
        <br> <br>
        <a href="registration.php" class="new-register">New To TurboTalks? Register Here</a>
        <br> <br>
        <button class="login" id="submit-btn" type="submit" disabled name="submit-btn">LOGIN</button>
    </form>
    <script>
        var username = document.getElementById("username");
        var validusername = false;
        username.addEventListener("input", onUsernameInput);
        function onUsernameInput(event) {
            validusername = event.target.value.length > 5;
            username.style.border = validusername ? '4px solid green' : '4px solid red';
            checkValidity();
        }
        //password validity
        var password = document.getElementById("password");
        var validpassword = false;
        password.addEventListener("input", onPasswordInput);
        function onPasswordInput(event) {
            validpassword = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/.test(event.target.value);
            password.style.border = validpassword ? '4px solid green' : '4px solid red';
            checkValidity();
        }

        //toggle password for hide and show
        var showpass = document.getElementById('show-pass');
        showpass.addEventListener('click', togglepass);
        function togglepass(event) {
            event.preventDefault();
            if (password.getAttribute('type') === 'text') {
                password.setAttribute('type', 'password');
                showpass.innerHTML = 'Show Password';
            }
            else {
                password.setAttribute('type', 'text');
                showpass.innerHTML = 'Hide Password';
            }
        }
        var btn = document.getElementById('submit-btn');
        function checkValidity() {
            btn.disabled = !(validusername && validpassword);
        }
    </script>

    <?php
    $user_name = test_input($_POST['username']);
    $pass = test_input($_POST['password']);

    $servername = "localhost";
    $username = "vicky";
    $password = "Vikrant@GTR";
    $dbname = "turbotalks";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully <br>";
    $sql = "INSERT INTO login_detail (username, password) VALUES ('".$user_name."', '".$pass."')";
    if ($conn->query($sql) === TRUE) {
        // echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();

    function test_input($data) {
        $data = trim($data); 
        $data = stripslashes($data); 
        $data = htmlspecialchars($data); 
        return $data;
      }
    ?>
</body>

</html>