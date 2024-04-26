<title>Community</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>OneShot - Photography Blog</title>
<style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #fff; /* White background */
        color: #000; /* Black text */
    }
    header {
        position: relative;
        background-color: #000; /* Black header background */
        color: #fff;
        padding: 10px;
        text-align: center;
    }
    header img {
        position: absolute;
        top: 20px; /* Adjust top position as needed */
        left: 40px; /* Adjust left position as needed */
        height: 100px; /* Adjust height as needed */
    }
    nav {
        background-color: #000; /* Black navigation background */
        color: #fff;
        padding: 10px;
        text-align: center;
    }
    nav a {
        color: #fff;
        text-decoration: none;
        margin: 0 15px;
    }
    nav a.active {
            font-weight: bold;
            color:gold; /* Highlight style for the active link */
        }
    section {
        padding: 20px;
    }
    footer {
        background-color: #000; /* Black footer background */
        color: #fff;
        padding: 10px;
        text-align: center;
    }
</style>
</head>
<body>
<header>
    <img src="Screenshot 2024-02-13 182526.png" alt="OneShot Logo"> <!-- Replace "logo.png" with the path to your logo image -->
    <h1>OneShot</h1>
    <p>Your go-to Photography Blog</p>
</header>

<nav>
    <a href="Home.php">Home</a>
    <a href="Gallery.php">Gallery</a>
    <a href="Tutorials.php">Tutorials</a>
    <a href="Community.php" class="active">Community</a>
    <a href="About_us.php">About Us</a>
    <a href="Login.php">Login</a>
    <a href="Cart.php">Cart<span class="cart-count"></span></a>
</nav>
 
    <!-- Add more imageContainer divs as needed -->
</section>
<h1>Shopping Cart</h1>
<div class="cart-product"></div>

<script>
    window.onload = function() {
        // Fetch cart items from local storage
        let cartItems = JSON.parse(localStorage.getItem('cart2'));
        if (cartItems && cartItems.length > 0) {
            // Container to display cart items
            let cartContainer = document.querySelector('.cart-product');
            
            // Clear any existing content
            cartContainer.innerHTML = '';

            // Iterate over cart items and create HTML elements to display them
            cartItems.forEach(function(item) {
                // Create a div for each cart item
                let cartItemDiv = document.createElement('div');
                cartItemDiv.classList.add('cart-item');

                // Create HTML content for the cart item
                cartItemDiv.innerHTML = `
                    <p>Name: ${item.name}</p>
                    <p>Price: Rs.${item.Price}</p>
                `;

                // Append the cart item div to the cart container
                cartContainer.appendChild(cartItemDiv);
            });
        }
    };
</script>
   
</body>
</html>