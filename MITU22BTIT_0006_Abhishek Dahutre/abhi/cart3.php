<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Revved Riders | Bike Parts Shop</title>
    <style>
        /* CSS styles */
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .navbar {
            background-color: #333;
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
        }

        .sectionHead {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .product {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            width: 200px;
            text-align: center;
            display: inline-block;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .product img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .product h4 {
            margin-top: 10px;
            margin-bottom: 5px;
            font-size: 18px;
            color: #333;
        }

        .product p {
            margin-bottom: 10px;
            font-size: 16px;
            color: #666;
        }

        .product button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .product button:hover {
            background-color: #0056b3;
        }

        .cart-item {
            background-color: #fff;
            border: 1px solid #ccc;
            margin-bottom: 5px;
            padding: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .cart-item div {
            font-size: 18px;
            color: #333;
        }

        .cart-item button {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .cart-item button:hover {
            background-color: #c82333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Additional styles */
        #paymentButton {
            display: none; /* Initially hidden */
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        #paymentButton:hover {
            background-color: #218838;
        }
       
        .container1 {
            display : flex;
            justify-content : space-between;
            padding-top: 30px;
            padding-bottom: 30px;
            padding-left: 30px;
            padding-right: 30px;
            color: white;
        }

        .containerCart {
            text-align : right;
            color: white;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container1">
            <a class="navbar-brand" href="#" style= "color:white;">Revved Riders</a>
            <!-- Navbar toggler and collapse content -->
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="containerCart">
        <a class="navbar-brand" href="#" style= "color:white;">Cart</a>
        <!-- Navbar toggler and collapse content -->
        <span id="cartCount" class="badge" style= "font-size: 20px;">0</span>
    </div>
</nav>
        </div>
    </nav>

    <main>
        <section id="shop">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sectionHead">Bike Parts Shop</div>
                        <hr>
                        <br>
                        <!-- Product cards -->
                        <div class="product">
                            <img src="https://www.fc-moto.de/WebRoot/FCMotoDB/Shops/10207048/5D8D/BDA8/5F3F/984E/AECD/AC1E/1405/B070/BGT-01-GMG-005-172_1_ml.jpg" alt="Glove">
                            <h4>Glove</h4>
                            <p>$50</p>
                            <button class="add-to-cart" data-name="Glove">Add to Cart</button>
                        </div>
                        <!-- Other product cards -->
                        <div class="product">
                            <img src="exhaust.jpg" alt="exhaust">
                            <h4>Exhaust</h4>
                            <p>$40</p>
                            <button class="add-to-cart" data-name="Exhaust">Add to Cart</button>
                        </div>
                        <div class="product">
                            <img src="helmet.jpg" alt="helmet">
                            <h4>helmet</h4>
                            <p>$60</p>
                            <button class="add-to-cart" data-name="helmet">Add to Cart</button>
                        </div>
                        <div class="product">
                            <img src="bag.jpg" alt="Bag">
                            <h4>Bag</h4>
                            <p>$45</p>
                            <button class="add-to-cart" data-name="bag">Add to Cart</button>
                        </div>
                        <div class="product">
                            <img src="lock.jpg" alt="lock">
                            <h4>lock</h4>
                            <p>$55</p>
                            <button class="add-to-cart" data-name="lock">Add to Cart</button>
                        </div>
                        <div class="product">
                            <img src="sunglasses.jpg"alt="sunglasses">
                            <h4>Sunglasses</h4>
                            <p>$65</p>
                            <button class="add-to-cart" data-name="Sunglasses">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Shopping Cart Section -->
        <section id="cart">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sectionHead">Shopping Cart</div>
                        <hr>
                        <br>
                        <div id="cartItems">
                            <!-- Cart items will be dynamically added here -->
                        </div>
                        <button id="paymentButton">Make Payment</button>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="footer">
        <div class="container">
            &copy; 2024 Revved Riders. Ltd.
        </div>
    </footer>

    <script>
       document.addEventListener('DOMContentLoaded', function () {
    const cartItemsContainer = document.getElementById('cartItems');
    const paymentButton = document.getElementById('paymentButton');
    const cartCountElement = document.getElementById('cartCount');

    let cartCount = 0; // Initialize cart count

    // Function to update the cart count display
    function updateCartCount(count) {
        cartCount = count;
        cartCountElement.textContent = cartCount;
    }

    // Function to add an item to the cart
    function addToCart(itemName) {
        const item = document.createElement('div');
        item.classList.add('cart-item');
        item.innerHTML = `
            <div>${itemName}</div>
            <button class="remove-from-cart">Remove</button>
        `;
        cartItemsContainer.appendChild(item);
        // Increment cart count and update display
        updateCartCount(cartCount + 1);
        // Show the payment button after adding an item to the cart
        paymentButton.style.display = 'block';
    }

    // Function to remove an item from the cart
    function removeFromCart(item) {
        cartItemsContainer.removeChild(item);
        // Decrement cart count and update display
        updateCartCount(cartCount - 1);
        // Hide payment button if cart is empty
        if (cartCount === 0) {
            paymentButton.style.display = 'none';
        }
    }

    // Add event listeners to add buttons
    const addButtons = document.querySelectorAll('.add-to-cart');
    addButtons.forEach(button => {
        button.addEventListener('click', function () {
            const itemName = button.dataset.name;
            addToCart(itemName);
        });
    });

    // Add event listeners to remove buttons
    document.addEventListener('click', function (event) {
        if (event.target.classList.contains('remove-from-cart')) {
            const item = event.target.parentElement;
            removeFromCart(item);
        }
    });

    // Event listener for the payment button
    paymentButton.addEventListener('click', function () {
        // Add your payment processing logic here
        alert('Processing payment...');
        // For demonstration purposes, we'll just show an alert
        alert('Payment successful!');
        // Clear the cart and update cart count
        cartItemsContainer.innerHTML = '';
        updateCartCount(0);
        paymentButton.style.display = 'none';
    });
});

    </script>

</body>

</html>
