<!DOCTYPE html>
<html>

<head>
    <title>Product Page</title>
    <style>
        /* CSS styles for navigation bar */
        .navbar {
            overflow: hidden;
            background-color: #333;
        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Style the active/current link */
        .navbar a.active {
            background-color: #555;
            color: white;
        }

        /* Common styles for content */
        .content {
            border: 2px solid #3498db;
            border-radius: 10px;
            padding: 20px;
            margin: 20px auto;
            width: 70%;
            background-color: #fff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .content h2 {
            color: #2ecc71;
        }

        .content p {
            color: #666;
        }

        /* Product styles */
        .product {
            margin-bottom: 20px;
        }

        .product img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Cart styles */
        .cart {
            border: 2px solid #3498db;
            border-radius: 10px;
            padding: 20px;
            margin: 20px auto;
            width: 70%;
            background-color: #fff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .cart h2 {
            color: #2ecc71;
        }

        .cart p {
            color: #666;
        }
    </style>
</head>

<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 20px; background-color: #f2f2f2; color: #333; text-align: center;">

    <!-- Navigation Bar -->
    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="Contents page.php">About</a>
        <a class="active" href="product.php">Products</a>
        <a href="login.php">Login</a>
        <a href="cart.php">Cart <span id="cartItemCount">(0)</span></a> <!-- Added Cart link with item count -->
    </div>

    <h1 style="color: #3498db;">Product Page</h1>

    <!-- Product List -->
    <div class="content">
        <h2>Featured Products</h2>

        <!-- Product 1 -->
        <div class="product">
            <img src="https://cyberbackpack.com/cdn/shop/products/lightweight-anti-theft-laptop-bags-for-ultimate-security-cyberbackpack-backpack-cyberbrands-218193_800x.jpg?v=1698004916" alt="cyberbackpack">
            <h3>Anti-Theft Laptop Travel Backpack</h3>
            <p>Introducing the Cyberpack - the last backpack you'll ever need! This futuristic pack is the ultimate combination of style and functionality, designed to meet the needs of modern-day go-getters. With its sleek design and advanced features like USB A & C charging ports, anti-theft locking system, RFID-blocking pocket, and water-resistant material, the Cyberpack is the perfect companion for your daily hustle. And let's not forget the ultimate showstopper - the iconic instantly recognizable angular Tesla Cybertruck Cyberpunk inspired design! Whether you're commuting to work or hitting the trails, the Cyberpack has got your back (literally). Say goodbye to boring backpacks and hello to the future of carry.</p>
            <button onclick="addToCart('Anti-Theft Laptop Travel Backpack', 1000)">Add to Cart</button>
        </div>

        <!-- Product 2 -->
        <div class="product">
            <img src="https://ksr-ugc.imgix.net/assets/015/387/858/1e4454416bc7f44c2b8979032439fc94_original.jpg?ixlib=rb-4.1.0&crop=faces&w=1552&h=873&fit=crop&v=1493789431&auto=format&frame=1&q=92&s=486e2d60d46da4b06fd04572406d87d9" alt="Smart Pillow">
            <h3>Sunrise Smart Pillow</h3>
            <p>We created the Sunrise Pillow to revolutionize your mornings and your nights. It’s simple to use, ultra-comfortable and wakes you naturally. With the Sunrise Pillow's Deep Sleep technology for nights & Sunrise Alarm to start your day, you can effortlessly improve your body's sleep & wake hormones thanks to the power of science & technology. Say goodbye to restless nights and groggy mornings.</p>
            <button onclick="addToCart('Smart Pillow', 1500)">Add to Cart</button>
        </div>
    </div>

    <script>
        function addToCart(productName, price) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let productExists = cart.find(item => item.name === productName);

            if (productExists) {
                productExists.quantity += 1;
            } else {
                cart.push({ name: productName, price: price, quantity: 1 });
            }

            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartItemCount(); // Update cart item count in the navigation bar
            window.location.href = "cart.html";
        }

        function updateCartItemCount() {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let itemCount = cart.reduce((total, item) => total + item.quantity, 0);
            document.getElementById('cartItemCount').textContent = `(${itemCount})`;
        }

        // Call the function to update cart item count when the page loads
        updateCartItemCount();
    </script>

</body>

</html>
