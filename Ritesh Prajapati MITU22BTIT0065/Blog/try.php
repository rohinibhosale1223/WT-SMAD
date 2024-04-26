
<!DOCTYPE html>
<html lang="en">
<head>
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
            color: gold; /* Highlight style for the active link */
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
        /* Style for the image gallery */
        #imageGallery {
            display: flex;
            justify-content: space-around;
        }
        .imageContainer {
            width: 30%; /* Adjust the width of image containers as needed */
            margin: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
        }
        .imageContainer img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .addToCartBtn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
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
    <a href="Home.html">Home</a>
    <a href="Gallery.html">Gallery</a>
    <a href="Tutorials.html">Tutorials</a>
    <a href="Community.html" class="active">Community</a>
    <a href="About_us.html">About Us</a>
    <a href="Login.html">Login</a>
</nav>

<p>Services </p>

<section id="imageGallery">
    <div class="imageContainer">
        <img src="images (1).jpeg" alt="Image 1">
        <p>Secon Pro</p>
        <button class="addToCartBtn" onclick="addToCart('Secon Pro')">Add to cart</button>
    </div>
    <div class="imageContainer">
        <img src="download (1).jpeg" alt="Image 2">
        <p>Ducon C2</p>
        <button class="addToCartBtn" onclick="addToCart('Ducon C2')">Add to cart</button>
    </div>
    <div class="imageContainer">
        <img src="download.jpeg" alt="Image 3">
        <p>Jasono H5</p>
        <button class="addToCartBtn" onclick="addToCart('Jasono H5')">Add to cart</button>
    </div>
    <!-- Add more imageContainer divs as needed -->
</section>

<script>
    function addToCart(itemName) {
        alert(itemName + " added to cart!");
        // Add logic here to move the item to the cart
    }
</script>

</body>
</html>

