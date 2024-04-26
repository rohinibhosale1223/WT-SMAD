<!DOCTYPE html>
<html>
<head>
<title>Registeration Form</title>
<style>

.header {
            background-color: #b18e77;
            padding-left: 15px 0;
            padding-right: 15px 0;
            font-family:Georgia, 'Times New Roman';
            margin-bottom: 100px;
        }

        .navbar {
            justify-content: space-between;
            margin-right: 5%;
            display: flex;
            align-items: center;
        }

        .nav-text
        {
            color: #f2e4d6;
            text-align: left;
            padding-left: 40px;
            font-size: 50px;
        }

        .nav-list {
            align-items: right;
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .nav-item {
            display: inline-block;
            margin-right: 40px;
        }

        .nav-link {
            color: #f2e4d6;
            text-decoration:underline;
            font-size: 20px;
        }

        .nav-link:hover
        {
            color: #fff5ec;
            text-decoration:#b18e77;
            font-size: 22px;
            text-decoration: solid;
        }

        body {
            margin: 0;
            padding:0px;
            font-family: Palatino;
            background-color: #fbf4ed;
        }
.form-container
{
    
    margin: auto;
	font-family:calibri;
	background-color: #755f51;
	width : 25%;
	padding : 20px;
	border-radius:10px; 
    text-align: center;
    color: #f2e4d6;
    font-family:Georgia, 'Times New Roman';
    margin-bottom: 100px;
    
}
button
{
    width: 60%;
    height: 35px;
    color:#b18e77;
    border-radius: 8px;
    border: #b18e77;
}

.image
{
    margin-top: 40px;
    width: 75%;
    border-radius: 8px;
}

.input {
    margin: 2px;
    width: 75%;
    height: 28px;
    border-radius: 8px;
    border: #f2e4d6;
}

.loginLink
{
    color: #b18e77;
}

.loginLink:hover
{
    color: #fff5ec;
    text-decoration:#b18e77;
    font-size: 12px;
    text-decoration: solid;
}

.footer {
            position:relative;
            bottom: 0px;
            width: 100%;
            background-color: #755f51;
            text-align: center;
            padding: 25px 0;
            color: #f2e4d6;
        }

        .footer-text {
            margin: 0;
        }

</style>
</head>
<body>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	//data code
	$email = test_input($_POST['email']);
	$username = test_input($_POST['username']);
	$passwordd = test_input($_POST['password']);

	//connetiion code
	$servername = 'localhost';
	$user_name= 'gurneet';
	$passwd = 'gurneet';
	$dbname = 'pbaregisters';
	$conn = new mysqli($servername, $user_name, $passwd, $dbname);

	//check connection
	if($conn->connect_error)
	{
		die("Connection failed: " .$conn->connet_error);
	}

	echo "Connection Successfull";
    
	$stmt = $conn->prepare("INSERT INTO registerdata (email, username, passwordd) VALUES ('".$email."','".$username."' , '".$passwordd."') ");

	if ($stmt->execute())
	{
        header("Location: https://localhost/PBA2/portfolio/home.php?username=$username");
        exit;
	}
	else
	{
		echo "Error: " .$stmt."<br>".$conn->error;
	}
    $stmt->close();
	$conn->close();
}

function test_input($data)
{
	$data=trim($data);//remove blank spcaes
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}
?>
    <header class="header">
        <nav class="navbar">
        <div>
            <h1 class="nav-text">Portfolio</h1>
        </div>
        <div>
            <ul class="nav-list">
                <li class="nav-item"><a href="home.html" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="products.html" class="nav-link">Products</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link">About Me</a></li>
                <li class="nav-item"><a href="login.php" class="nav-link">Login/Register</a></li>
            </ul>
        </nav>
    </header>


<div class="form-container">
	<div class="form-top">
		<img src="assets/register.jpg" class="image">
	</div>
	<div class="form-bottom">
	<H3>Lets Register</h3>
<!-- <form name="input" action="home.html" method="get"> -->
<form name="input" method="post">
<legend>User personal information</legend><bR>
<lable>E-mail:</lable> <br>
<input class="input" placeholder= "  Email-id" type="email" name="email" required><br><br>
<lable>Username:</lable> <br>
<input class="input" placeholder= "  Username" type="text" name="username" required><br><br>
<lable>Password:</lable> <br>
<input class="input" placeholder= "  Password" type="" name="password" id="password" required><br><br>
<lable> Confirm Password:</lable> <br>
<input class="input" placeholder= "  Re-enter password" type="" name="password" id="confirmPassword" required><br><br><br>
<button><b style="font-size: medium;">Submit</b></button>
<h6>Already Have An Account?  <a class="loginLink" href="login.php">Log In</a></h6>
</form>
	</div>
</div>
</div>

<footer class="footer">
    <p class="footer-text">&copy; 2024 My Portfolio. All rights reserved.</p>
</footer>



</body>
<script>
    let password = document.getElementById('password')
    let confirmPass = document.getElementById('confirmPassword')

    let validConfirmPassword = false
    confirmPass.addEventListener('input', onConfirmPasswordInput)
    
    function onConfirmPasswordInput(event) {
        validConfirmPass = event.target.value == password.value
        onConfirmPasswordInput.style.borderColor = validConfirmPass ? 'green' : 'red'
    }


</script> 
</html>