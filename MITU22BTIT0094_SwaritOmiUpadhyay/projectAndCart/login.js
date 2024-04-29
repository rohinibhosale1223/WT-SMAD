
document.addEventListener('DOMContentLoaded', function() {
    var username = document.getElementById('username');
    var password = document.getElementById('password');

    var validUsername = false;
    username.addEventListener('input', onUsernameInput);

    function onUsernameInput(event) {
        validUsername = event.target.value.length > 5;
        username.style.borderColor = validUsername ? 'green': 'red';
        checkValidity();
    }

    var validPass = false;
    password.addEventListener('input', onPassInput);

    function onPassInput(event) {
        validPass = event.target.value.length > 5; 
        password.style.borderColor = validPass ? 'green': 'red';
    }


    document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault(); 

        if (username.value === 'Swarit' && password.value === 'Swarit0908') {
            alert('Login successful!');
        } else {
            alert('Invalid username or password.');
        }
    });
});
document.addEventListener('DOMContentLoaded', function() {
    var pass = document.getElementById('password');
    var showPass = document.getElementById('show-pass');

    showPass.addEventListener('click', togglePass);

    function togglePass(event) {
        event.preventDefault();
        if(pass.getAttribute('type') === 'text'){
            pass.setAttribute('type', 'password');
            showPass.innerHTML = 'Show Password';
        } else {
            pass.setAttribute('type', 'text');
            showPass.innerHTML = 'Hide Password';
        }
    }
});


