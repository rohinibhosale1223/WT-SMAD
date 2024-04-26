
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
            width: 10%; /* Adjust the width of image containers as needed */
            margin: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
        }
        .imageContainer img {
            width: 100%;
            height: auto;
            border-radius: 10px;
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
    <a href="Home.php">Home</a>
    <a href="Gallery.php">Gallery</a>
    <a href="Tutorials.php">Tutorials</a>
    <a href="Community.php" class="active">Community</a>
    <a href="About_us.php">About Us</a>
    <a href="cartpg.php">Cart</a>
    <a href="Login.php">Login</a>
    <a href="Cart.php">Cart<span class="cart-count"></span></a>
</nav>

<p>Services </p>

<section id="imageGallery">
    <div class="imageContainer">
        <img src="images (1).jpeg" alt="Image 1">
        <p>Secon Pro</p>
        <p>Price:Rs.20000</p>
        <button class="addToCartBtn" onclick="addToCart({name:'Secon Pro',Price:20000})">Add to cart</button>
    </div>
    <div class="imageContainer">
        <img src="download (1).jpeg" alt="Image 2">
        <p>Ducon C2</p>
        <p>Price:Rs.15000</p>
        <button class="addToCartBtn" onclick="addToCart({name:'Ducon C2',Price:15000})">Add to cart</button>
    </div>
    <div class="imageContainer">
        <img src="download.jpeg" alt="Image 3">
        <p>Jasono H5</p>
        <p>Price:Rs.18000</p>
        <button class="addToCartBtn" onclick="addToCart({name:'Jasono H5',Price:18000})">Add to cart</button>
    </div>
    <!-- Add more imageContainer divs as needed -->
</section>

<script>
    //localStorage.clear();
   // let cart2=[];
    /*const cartCount=document.querySelector('.cart-count');
    function addToCart(productdetail){
        if(!cart2.find(e => e.name === productdetail.name)){
       cart2.push(productdetail);
            cartCount.textContent=`(${cart2.length})`;
            console.log(cart2);
            localStorage.setItem('cart2', JSON.stringify(cart2));
        }

    }
     window.onload=function(){
         cart2=[...JSON.parse(localStorage.getItem('cart2'))];
        cartCount.textContent=`(${cart2.length})`;
     }*/
</script>

</body>
</html>

