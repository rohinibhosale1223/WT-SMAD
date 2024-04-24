<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="servicepagestyle.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #000;
            color: #fff;
        }
        .logo {
            width: 175px;
            height: 75px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        header {
            background-color: #000;
            padding: 10px;
            text-align: center;
        }
        nav {
            background-color: #000;
            text-align: center;
            padding: 10px 0;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            font-size: 18px;
        }
        nav a:hover {
            color: #FF0000;
        }
        .login-btn {
            float: right;
            margin-top: 10px;
            margin-right: 20px;
            background-color: #FF0000;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-btn:hover {
            background-color: #8B0000;
        }
        .main-content {
            padding: 20px;
        }
        .car-section {
            text-align: center;
            margin-top: 50px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        .car {
            flex: 0 0 calc(20% - 20px); 
            margin: 10px;
            text-align: left;
            background-color: #333;
            padding: 20px;
            border-radius: 10px;
        }
        .car img {
            width: 300px;
            height: auto;
            border-radius: 5px;
        }
        .car p {
            margin-top: 10px;
            color: #fff;
            text-align: center;
        }
        .fc{
            color: #FF0000;
            text-align: center;
        }
        .footer {
    background-color: #000000; 
    color: #FFFFFF; 
    padding: 20px 0;
    text-align: center;
}

.social-links a {
    margin: 0 10px;
    text-decoration: none;
    color: #FF0000; 
    font-weight: bold;
}

.social-links a:hover {
    text-decoration: underline;
}


.social-links a {
    margin: 0 10px;
    text-decoration: none;
    font-weight: bold;
}

.social-links a:hover {
    text-decoration: underline;
}
.social-links img{
    width: 20px;
}

        .opinions-section {
    margin-top: 50px;
    text-align: center;
}

.opinions-section h2 {
    color: #FF0000;
    margin-bottom: 20px;
}

.car-opinion {
    width: calc(33.33% - 20px); 
    display: inline-block;
    margin-right: 20px; 
    vertical-align: top;
    box-sizing: border-box;
}

.car-opinion:last-child {
    margin-right: 0;
}

.car-opinion img {
    width: 100%; 
    height: auto;
    margin-bottom: 10px;
}

.opinion-info {
    text-align: left;
}

.opinion-info h3 {
    color: #FF0000;
    margin-bottom: 10px;
    text-align: center;
}

.opinion-info p {
    margin-bottom: 0;
    line-height: 1.5;
    text-align: center;
}
#service{
    color: red;
}
    </style>
</head>
<body>
    <header>
        <img class="logo" src="carlogo.jpg">
    </header>
    <nav>
        <a href="home.html">Home</a>
        <a href="carnews.html">Car News</a>
        <a href="carreviews.html">Car Reviews</a>
        <a href="cargalleries.html">Car Galleries</a>
        <a href="servicepage.html" id="service">Services</a>
        <a href="cartpage.html" class="cart-count">Cart</a>
        <a href="about.html">About</a>
        <form action="login.php">
            <button class="login-btn">LOGIN</button>
        </form>
    </nav>
    <a href="cartpage.html">Cart<span class="cart-count"></span></a>
    <div class="product-cart">
        <div class="product" name="brake">
            <h4>Brake</h4>
            <img src="brake.jpeg">
            <p>These are steel backing plates which are bound to the surface that faces the brake discs. Brake pads convert the kinetic energy to thermal through friction. </p>
            <p>Rs. 2400</p>
            <button onclick="addproduct({name: ' brake', price: '2400'})">Add to Cart</button>
        </div>
        <div class="product" name="oil">
            <h4>Engine Oil</h4>
            <img src="oil.webp">
            <p>Fully Synthetic motor oil - It features the dynamic “Flexi-Molecule Technology” that constantly adapt to boost protection, when your engine needs it most. </p>
            <p>Rs. 1000</p>
            <button onclick="addproduct({name: ' oil', price: '1000'})">Add to Cart</button>
        </div>
        <div class="product" name="clutch">
            <h4>Clutch</h4>
            <img src="clutch.jpeg">
            <p>The clutch disc, also known as the clutch drive plate, is a part placed between the pressure plate of the clutch cover and the flywheel. When the car clutch is engaged, the disc is squeezed between the friction surfaces of these two parts. </p>
            <p>Rs. 4300</p>
            <button onclick="addproduct({name: ' clutch', price: '4300'})">Add to Cart</button>
        </div>
        <div class="product" name="filter">
            <h4>Filter</h4>
            <img src="filter.jpeg">
            <p>Car filter is essentially important as it guards engine from dust, dirt, sand and other contaminants. </p>
            <p>Rs. 2100</p>
            <button onclick="addproduct({name: ' filter', price: '2100'})">Add to Cart</button>
        </div>
    </div>
    <script>
         let cart2=[];
    const cartCount=document.querySelector('.cart-count');
    function addproduct(productdetail){
        if(!cart2.find(e => e.name === productdetail.name)){
       cart2.push(productdetail);
            cartCount.textContent=`⁠ (${cart2.length}) `;
            console.log(cart2);
            localStorage.setItem('cart2', JSON.stringify(cart2));
        }

    }
     window.onload=function(){
         cart2=[...JSON.parse(localStorage.getItem('cart2'))];
        cartCount.textContent=`⁠ (${cart2.length}) ⁠`;
     }

    </script>
    <?php
    $servername = "localhost";
    $username = "vicky";
    $password = "Vikrant@GTR";
    $dbname = "itemcart";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else{
        echo "Connection success";
    }
    $itemname = $_POST['product'];
    $sql = "INSERT INTO items (itemid, itemname, itemquantity) VALUES (5, '".$itemname."', 3)  ";
    if ($conn->query($sql) === TRUE) {
        echo "Insertion done";
    } else {
        echo "Failed";
    }
    ?>
</body>
</html>
