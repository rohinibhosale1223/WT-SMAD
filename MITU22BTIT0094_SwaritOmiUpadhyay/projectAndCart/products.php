
<?php
session_start();

// Initialize the cart if it doesn't exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Function to add an item to the cart
function addToCart($product) {
    if (isset($_SESSION['cart'][$product])) {
        $_SESSION['cart'][$product]++;
    } else {
        $_SESSION['cart'][$product] = 1;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product'])) {
    addToCart($_POST['product']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Products Page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
    /* Basic styles */
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
    }

    h1 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    .product-grid {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .product {
        background: #fff;
        border: 1px solid #ddd;
        padding: 20px;
        margin-top: 10%;
        margin-right: 10px;
        margin-left: 10px;
        width: 300px; /* Ensure consistent width for alignment */
        text-align: center;
        transition: box-shadow 0.3s;
    }

    .product:hover {
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .product button {
        padding: 10px 20px;
        font-size: 1em;
        color: white;
        background-color: #3498db;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        display: block; /* Ensures proper alignment */
        margin: 10px auto; /* Centers the button */
    }

    .product button:hover {
        background-color: #2980b9;
    }

    .product img {
        width: 250px;
        height: auto;
        display: block;
        margin: 10px auto; /* Centers the image */
    }

    .cart-link {
        text-align: center;
        font-size: 1.1em;
        color: #3498db;
        text-decoration: none;
    }

    .cart-link:hover {
        text-decoration: underline;
    }
    </style>
</head>
<body>
    <?php include 'navbar.html'; ?>
    <div class="product-grid">
        <div class="product">
            <h2>Asus Laptop</h2>
            <p>High performance laptop with 16GB RAM and 512GB SSD.</p>
            <img src="asus.png" alt="Asus Laptop" />
            <p>$1000</p>
            <button class="add-to-cart" data-product="asus_laptop">Add to Cart</button>
        </div>

        <div class="product">
            <h2>MacBook Air</h2>
            <p>Lightweight and portable with a stunning Retina display.</p>
            <img src="macir.png" alt="MacBook Air" />
            <p>$1200</p>
            <button class="add-to-cart" data-product="macbook_air">Add to Cart</button>
        </div>

        <div class="product">
            <h2>MacBook Pro</h2>
            <p>Powerful and versatile with a sleek aluminum body.</p>
            <img src="macpro.png" alt="MacBook Pro" />
            <p>$1500</p>
            <button class="add-to-cart" data-product="macbook_pro">Add to Cart</button>
        </div>
    </div>

    <script>
    $(document).ready(function() {
        $(".add-to-cart").on("click", function() {
            var product = $(this).data("product");
            $.post("products.php", { product: product }, function() {
                alert("Item added to cart!");
            }).fail(function() {
                alert("Failed to add item to cart.");
            });
        });
    });
    </script>
</body>
</html>
