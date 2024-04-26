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

    <form action="/login" method="post">
    <h1>Login</h1>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br>
    <label for="pass">Password:</label>
        <input type="password" id="pass" name="pass" required><br>

    <button id="show-pass">show password</button><br>

    <button type="submit" >Login</button>
    <p id="registerLink" onclick="location.href='Registration.html'">Don't have an account? Register here.</p>
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
