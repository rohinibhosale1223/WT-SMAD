<!DOCTYPE html>
<html>
    <head>
        <title>TurboTalks-RegisterPage</title>
        <link rel="web icon" type="png" href="carlogo.jpg">
        <style>
            body{
                background-image: url(p.jpg); 
                 background-repeat: no-repeat; 
                 background-size: cover;
                 font-family: fantasy;
            }
            form{
                border: 2px solid black; 
                color: white;
                width: 500px; 
                height: 570px; 
                font-family: fantasy;
                text-align: center; 
                margin-left: 600px; 
                margin-top: 200px; 
                background-color: rgba(0, 0, 0, 0.6);
            }
            .name{
                width: 350px;
                 height: 30px;
                  border: 1px solid black; 
                  border-radius: 5px;
            }
            .email{
                width: 350px;
                height: 30px; 
                border: 1px solid black;
                 border-radius: 5px;
            }
            .password{
                width: 170px; 
                height: 30px; 
                border: 1px solid black; 
                border-radius: 5px;
            }
            .cpassword{
                width: 170px; 
                height: 30px; 
                border: 1px solid black; 
                border-radius: 5px;
            }
            .number{
                width: 170px; 
                height: 30px; 
                border: 1px solid black;
                 border-radius: 5px;
            }
            .menu{
                width: 180px; 
                height: 35px; 
                border: 1px solid black; 
                border-radius: 5px;
            }
            .register{
                cursor: pointer; 
                border: none;
                color: white;
                background-color: #FF0000;
                 border-radius: 5px; 
                 width: 100px; 
                 height: 50px;
                font-family: fantasy;
            }
            .register:hover
            {
                background-color: #8B0000;
            }
            .login{
                color: #fff; 
                cursor: pointer ;
                border-radius: 5px;
            }
            .login:hover{
                color:  #FF0000;
            }
            .label
            {
                color:white;
            }
        </style>
    </head>
    <body>
        <form action="home.html" method="post">
            <h3 class="h3">REGISTER AS AN TURBOTALKS ENTHUSIAST</h3>
            <br> 
            <h4>Account Details</h4>
            <input type="text" class="name" placeholder=" Full Name" id="name" name="fullname">
            <br> <br>
            <input type="email" class="email" placeholder=" Email" id="email" name="email">
            <br> <br>
            <input type="password" placeholder=" Password" class="password" id="password" name="password">
            <input type="password" placeholder=" Confirm Password" class="cpassword" id="cpassword" name="cpassword">
            <br> <br>
            <input type="text" placeholder=" Contact Number" class="number" id="phone" name="phone">
            <select class="menu">
                <option value="">Select Your State --</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chattisgarh">Chattisgarh</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jharkand">Jharkand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Odisha">Odisha</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="West Bengal">West Bengal</option>
            </select>
            <br> <br>
            <input type="checkbox">I would like to subscribe to the TurboTalks newsletter.
            <br>
            <input type="checkbox">I have read all Terms & Conditions.
            <br> <br>
            <button class="register" id="register-btn">REGISTER</button>
            <br> <br>
            <label class="label" for="login">Already a member of TurboTalks?</label>
            <a href="login.php" class="login">Login Here!</a>
        </form>
        <script>
            //name validity
            var nameinput = document.getElementById("name");
            var validname = false;
            nameinput.addEventListener("input",onNameInput);
            function onNameInput(event)
            {
                validname = event.target.value.length > 2;
                nameinput.style.border = validname ? '4px solid green' : '4px solid red';
                checkValidity();
            }
            //email validity
            var emailinput = document.getElementById("email");
            var validemail = false;
            nameinput.addEventListener("input",onEmailInput);
            function onEmailInput(event)
            {
               var emailpattern = event.target.value.length > 5;
               validemail = emailpattern.test(event.target.value);
               emailinput.style.border = validemail ? '3px solid green' : '3px solid red';
               checkValidity();
            }
            //password validity
            var password = document.getElementById("password");
            var validpassword = false;
            password.addEventListener("input", onPasswordInput);
            function onPasswordInput(event)
            {
                validpassword = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/.test(event.target.value);
                password.style.border = validpassword ? '4px solid green' : '4px solid red';
                checkValidity();
            }
            //confirm password
            var cpassword = document.getElementById("cpassword");
            var validcpassword = false;
            password.addEventListener("input", oncPasswordInput);
            function oncPasswordInput(event)
            {
                validcpassword = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/.test(event.target.value);
                cpassword.style.border = validcpassword ? '4px solid green' : '4px solid red';
                checkValidity();
            }
            function checkValidity()
            {
                submit.disabled = !(validusername && validpassword);
            }
        </script>
        <?php
                $fullname = $_POST['fullname'];
                $email = $_POST['email'];
                $pass = $_POST['password'];
                $cpassword = $_POST['cpassword'];
                $number = $_POST['phone'];
                $pass = password_hash($pass, PASSWORD_DEFAULT);

                $servername = "localhost";
                $user_name = "vicky";
                $password = "Vikrant@GTR";
                $dbname = "turbotalks";
                $conn = new mysqli($servername, $user_name, $password, $dbname);
                
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }
                echo "Connected successfully";
                
                $sql = "INSERT INTO registration_details (fullname, email, password, cpassword, number) VALUES ('".$fullname."', '".$email."', '".$pass."', '".$cpassword."', '".$number."') ";
                
                if ($conn->query($sql) === TRUE) {
                  echo "New record created successfully";
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
                ?>
    </body>
</html>